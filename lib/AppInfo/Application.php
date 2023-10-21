<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Simx72 <adventure5200@duck.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ActivityMan\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'activityman';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
