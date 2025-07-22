<?php

namespace JMose\CommandSchedulerBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

final class CommandFailedEvent extends Event {
	private array $data;

	/**
	 * @param array $_data
	 */
	public function __construct(array $_data)
	{
		$this->data = $_data;
	}

	/**
	 * @return array
	 */
	public function getData(): array {
		return $this->data;
	}
}
