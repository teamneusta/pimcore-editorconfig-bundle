<?php
declare(strict_types=1);

namespace Neusta\Pimcore\AreabrickConfigBundle\Document\EditableDialogBox\EditableItem;

use Neusta\Pimcore\AreabrickConfigBundle\src\Document\EditableDialogBox\EditableItem;

class CheckboxItem extends EditableItem
{
    public function __construct(string $name)
    {
        parent::__construct('checkbox', $name);
    }

    public function setDefaultChecked(): static
    {
        return $this->addConfig('defaultValue', true);
    }

    public function setDefaultUnchecked(): static
    {
        return $this->addConfig('defaultValue', false);
    }
}
