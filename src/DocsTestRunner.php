<?php

declare(strict_types=1);

namespace Celema\Development;

class DocsTestRunner
{
	protected readonly string $title;
	private readonly string|bool $dir;

	public function __construct(array $args)
	{
		$this->title = 'Documentation snippets test runner';

		$dir = $args[1] ?? null;

		if ($dir === null) {
			print "{$this->title}: Missing directory operand" . PHP_EOL;
			print 'Try `docs-test-runner path/to/snippets`' . PHP_EOL;
			exit(1);
		}

		$this->dir = realpath($dir);

		if (!$this->dir || !is_dir($this->dir)) {
			print "{$this->title}: Directory does not exist" . PHP_EOL;
			print 'Directory: ' . $dir . PHP_EOL;
			exit(1);
		}
	}

	public function run(): void
	{
		$files = glob($this->dir . '/*.php');
		print $this->title . PHP_EOL . PHP_EOL;

		foreach ($files as $file) {
			$file = realpath($file);
			$line = "\033[33mRun\033[0m: " . basename($file);
			system('php ' . $file, $value);

			if ($value !== 0) {
				print "{$line} \033[31mERROR\033[0m" . PHP_EOL;
				exit($value);
			}

			print "{$line} \033[32mSUCCESS\033[0m" . PHP_EOL;
		}

		exit(0);
	}
}
