<?php
/**
 * Amazium Application
 *
 * @copyright Amazium bvba
 * @since {2019-04-01}
 */

namespace Amazium\SampleApp\Application\Command\BankAccount;

use Amazium\Kernel\Application\Command\CommandHandler;
use Amazium\Kernel\Application\Context\Context;

interface RequestBankAccountHandler extends CommandHandler
{
    /**
     * @param RequestBankAccount $requestBankAccount
     * @param Context $context
     * @return array
     */
    public function handle(RequestBankAccount $requestBankAccount, Context $context): array;
}
