<?php
/*
 * Class Name: Dizener
 * Description: A PHP class add-on for ACF blocks.
 * Author: Angel Baez
 * Version: 1.0
 * Author URI: https://angel-baez.com
 * GitHub Plugin URI: https://github.com/baezor/dizener
 * GitHub Branch: main
 */

if (!class_exists("Dizener")) {
  /**
   * Dizener class.
   *
   */
  class Dizener
  {
    public string $block_id;
    public string $block_slug;
    public string $block_name;
    public array $block_classes = ["your-block-collection"];
    public array $block_styles = [];

    public function acf_field_exists($name)
    {
      $acf_field = get_field_object($name);
      if (empty($acf_field)) {
        return false;
      }
      return true;
    }
    /**
     * Returns the block's attributes.
     *
     * @access public
     * @return string
     */
    public function get_block_attrs()
    {
      $block_attrs = "";
      if (!empty($this->block_id)) {
        $block_attrs .= " id='{$this->block_id}'";
      }
      if (!empty($this->block_classes)) {
        $block_attrs .= " class='" . implode(" ", $this->block_classes) . "'";
      }
      if (!empty($this->block_styles)) {
        $block_attrs .= " style='" . implode(" ", $this->block_styles) . "'";
      }
      if (!empty($this->block_name)) {
        $block_attrs .= " data-block='{$this->block_slug}'";
      }
      return $block_attrs;
    }

    /**
     * __construct function.
     *
     * @access public
     * @param array The ACF block settings and attributes.
     * @param string $block_name The name of the block.
     */
    public function __construct($block, $block_name)
    {
      if (empty($block_name)) {
        return;
      }
      $this->block_id = !empty($block["anchor"]) ? $block["anchor"] : $block["id"];
      $this->block_slug = $block_name;
      $this->block_name = "block-" . $block_name;

      // All block classes and inline styles must be added to the $block_classes and $block_styles arrays respectively.

      // Add block name to block classes.
      $this->block_classes[] = $this->block_name;
    }
  }
}
