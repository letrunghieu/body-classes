# Body classes
Add classes to the body element dynamically.

## Installation

### Use Composer

Add this package as your dependency:

    $> composer require hieu-le/body-classes

### Do not use Composer

Require the `src/Body.php` file into your code.

## Usage

First, create a single object which holds all classes:

    <?php
    $body = new \HieuLe\BodyClasses\Body();
    ?>
    
When you want to add new classes:

    <?php
    $body->addClasses('class-1 class-2');
    
    // OR
    
    $body->addClasses(array('class-1', 'class-2'));
    ?>

If the new added classes were added before, they will be ignored.

Finnaly, when you want to print these classes:

    <?
    echo $body->getClasses();
    ?>
