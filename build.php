#!/usr/bin/env php
<?php
/**
 * Build script for ASG Live theme distribution.
 *
 * Creates a dist/ folder with only the files needed for deployment.
 * Reads .distignore to determine which files to exclude.
 *
 * Usage: php build.php
 *        composer build
 *
 * @package ASG_Live
 */

$theme_slug = 'asg-live';
$source_dir = __DIR__;
$dist_dir   = __DIR__ . '/dist/' . $theme_slug;

echo "Building {$theme_slug} distribution...\n\n";

// Clean existing dist folder.
if ( is_dir( __DIR__ . '/dist' ) ) {
	echo "Cleaning existing dist folder...\n";
	delete_directory( __DIR__ . '/dist' );
}

// Create dist directory.
if ( ! mkdir( $dist_dir, 0755, true ) ) {
	echo "Error: Could not create dist directory.\n";
	exit( 1 );
}

// Read .distignore file.
$ignore_patterns = [];
$distignore_file = $source_dir . '/.distignore';

if ( file_exists( $distignore_file ) ) {
	$lines = file( $distignore_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
	foreach ( $lines as $line ) {
		$line = trim( $line );
		// Skip comments and empty lines.
		if ( empty( $line ) || strpos( $line, '#' ) === 0 ) {
			continue;
		}
		$ignore_patterns[] = $line;
	}
}

// Always ignore these.
$ignore_patterns[] = 'dist';
$ignore_patterns[] = 'build.php';
$ignore_patterns[] = '.git';

echo "Ignore patterns loaded: " . count( $ignore_patterns ) . "\n";

// Copy files.
$copied = 0;
$iterator = new RecursiveIteratorIterator(
	new RecursiveDirectoryIterator( $source_dir, RecursiveDirectoryIterator::SKIP_DOTS ),
	RecursiveIteratorIterator::SELF_FIRST
);

foreach ( $iterator as $item ) {
	$relative_path = str_replace( $source_dir . DIRECTORY_SEPARATOR, '', $item->getPathname() );
	$relative_path = str_replace( '\\', '/', $relative_path ); // Normalize for Windows.

	// Check if should be ignored.
	if ( should_ignore( $relative_path, $ignore_patterns ) ) {
		continue;
	}

	$target_path = $dist_dir . '/' . $relative_path;

	if ( $item->isDir() ) {
		if ( ! is_dir( $target_path ) ) {
			mkdir( $target_path, 0755, true );
		}
	} else {
		$target_dir = dirname( $target_path );
		if ( ! is_dir( $target_dir ) ) {
			mkdir( $target_dir, 0755, true );
		}
		copy( $item->getPathname(), $target_path );
		$copied++;
	}
}

echo "\nCopied {$copied} files to dist/{$theme_slug}/\n";
echo "Done! Upload the contents of dist/{$theme_slug}/ to your theme folder.\n";

/**
 * Check if a path should be ignored.
 *
 * @param string $path     The relative path to check.
 * @param array  $patterns Array of ignore patterns.
 * @return bool True if should be ignored.
 */
function should_ignore( $path, $patterns ) {
	foreach ( $patterns as $pattern ) {
		// Direct match.
		if ( $path === $pattern || strpos( $path, $pattern ) === 0 ) {
			return true;
		}

		// Check if path starts with pattern (directory match).
		if ( strpos( $path, $pattern . '/' ) === 0 ) {
			return true;
		}

		// Check if any part of the path matches.
		$path_parts = explode( '/', $path );
		foreach ( $path_parts as $part ) {
			if ( $part === $pattern ) {
				return true;
			}
		}

		// Wildcard matching for extensions like *.md.
		if ( strpos( $pattern, '*' ) !== false ) {
			$regex = '/^' . str_replace( [ '.', '*' ], [ '\\.', '.*' ], $pattern ) . '$/';
			if ( preg_match( $regex, basename( $path ) ) ) {
				return true;
			}
		}
	}

	return false;
}

/**
 * Recursively delete a directory.
 *
 * @param string $dir Directory path to delete.
 * @return bool True on success.
 */
function delete_directory( $dir ) {
	if ( ! is_dir( $dir ) ) {
		return false;
	}

	$items = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator( $dir, RecursiveDirectoryIterator::SKIP_DOTS ),
		RecursiveIteratorIterator::CHILD_FIRST
	);

	foreach ( $items as $item ) {
		if ( $item->isDir() ) {
			rmdir( $item->getPathname() );
		} else {
			unlink( $item->getPathname() );
		}
	}

	return rmdir( $dir );
}
