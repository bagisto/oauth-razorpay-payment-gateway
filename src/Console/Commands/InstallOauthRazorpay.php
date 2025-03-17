<?php

namespace Webkul\TableRate\Console\Commands;

use Illuminate\Console\Command;

class InstallOauthRazorpay extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'oauth-razorpay:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install OAuth Razorpay Payment Gateway Module';

	/**
	 * Install and configure RMA.
	 */
	public function handle()
	{
		$this->warn('Step 1: Migrating all tables into database (will take a while)...');
		$this->call('migrate');

		$this->warn('Step 2: Publishing Assets and Configurations...');
		$this->info($this->call('vendor:publish', [
			'--provider' => \Webkul\Razorpay\Providers\RazorpayServiceProvider::class,
			'--force'    => true,
		]));

		$this->warn('Step 4: Clearing cached bootstrap files...');
		$this->call('optimize:clear');
	}
}
