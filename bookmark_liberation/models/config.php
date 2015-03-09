<?php

/**
 *
 * Configuration Model
 *
 * Represents the complete Bookmark-Liberation config settings.
 *
 * @package   Bookmark-Liberation
 * @author    Tim Kächele <timkaechele@me.com>
 * @copyright Tim Kächele
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt GNU GPL v3
 *
 */
class Config {

  /**
   * Sets the user.password attribute
   */
  public function setUserPassword($password) {
    this->attr['user.password'] = Password::hash($password);
  }

  public function authUser($password) {
    return Password::match($password, $this->attr['user.password']);
  }

}
