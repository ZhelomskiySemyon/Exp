<?php

namespace Strategy\Clear;

class ExampleApplication
{
    public function __construct(public string $action)
    {
    }

    public function start(int $a, int $b)
    {
        $context = new Context();

        $strategy = match ($this->action) {
            'add' => new AddStrategy(),
            'subtract' => new SubtractStrategy(),
            default => new NullStrategy(),
        };

        /*switch ($action) {
            case 'add':
                $strategy = new AddStrategy();
                break;
            case 'subtract':
                $strategy = new SubtractStrategy();
            default:
                die('Нет такой математической операции');
        }*/

        $context->setStrategy($strategy);

        return $context->executeStrategy($a, $b);
    }
}

$app = new ExampleApplication('add');
$app->start(12, 34);
