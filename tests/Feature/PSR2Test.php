<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PSR2Test extends TestCase
{
    /**
     * Test PSR-2 coding standards.
     *
     * @return void
     */
    public function testPSR2CodingStandards()
    {
        // Define the directories to be checked
        $directories = [
            app_path(),
            base_path('routes'),
            base_path('tests'),
        ];

        // Iterate through the directories and check files for PSR-2 compliance
        foreach ($directories as $directory) {
            $files = $this->getFilesFromDirectory($directory);
            foreach ($files as $file) {
                $this->assertFileUsesPSR2CodingStandard($file);
            }
        }
    }

    /**
     * Get all PHP files recursively from the given directory.
     *
     * @param string $directory
     * @return array
     */
    protected function getFilesFromDirectory(string $directory): array
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directory)
        );

        $files = [];
        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                $files[] = $file->getPathname();
            }
        }

        return $files;
    }

    /**
     * Assert that a file uses PSR-2 coding standard.
     *
     * @param string $file
     * @return void
     */
    protected function assertFileUsesPSR2CodingStandard(string $file)
    {
        $process = new \Symfony\Component\Process\Process([
            'php',
            'vendor/bin/phpcs',
            '--standard=PSR2',
            $file,
        ]);

        $process->run();

        $this->assertTrue(
            $process->isSuccessful(),
            "File [{$file}] does not use PSR-2 coding standard:\n{$process->getOutput()}"
        );
    }
}
