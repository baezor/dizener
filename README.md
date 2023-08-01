# Dizener

> Dizener is a small PHP class add-on for ACF Blocks, providing useful methods for everyday development tasks.

Read the documentation at [angel-baez.com/blog/dizener/](https://angel-baez.com/blog/dizener/)

## How to use it

```php

/**
 * Block: Hero
 *
 * This is the template that displays the hero block.
 * To initialize the class you must pass two paremeters:
 *
 * $block: The ACF block object.
 * $block_name: The name of the block.
 *
 */

$b = new Dizener($block, "hero");
?>
<section <?= $b->get_block_attrs() ?>>
  <p>Your block HTML<p>
</section>

```

## Contributors

- [Angel Baez](https://angel-baez.com)
