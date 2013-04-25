<?php
/*
  $Id: bootstrap.php v1.0 2013-01-01 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2013 Loaded Commerce, LLC

  @author     LoadedCommerce Team
  @copyright  (c) 2013 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html

  @function The lC_Updater_Admin class manages zM services
*/   
abstract class lC_Addons_Bootstrap { 

  protected $_type,
            $_title,
            $_description,
            $_rating = '5',
            $_author,
            $_thumbnail,
            $_version,
            $_exists,
            $_enabled,
            $_valid;
  
  final public function isValid() {
    return true;
  }  
  
  public function exists() {
    return $this->_exists;
  }  
  
  public function isEnabled() {
    return $this->_enabled;
  }   
  
  public function getAddonType() {
    return $this->_type;
  }
  
  public function getAddonTitle() {
    return $this->_title;
  }  
  
  public function getAddonDescription() {
    return $this->_description;
  }  
  
  public function getAddonRating() {
    return $this->_rating;
  }  

  public function getAddonAuthor() {
    return $this->_author;
  }  
  
  public function getAddonThumbnail() {
    return $this->_thumbnail;
  }  
  
  public function getAddonVersion() {
    return $this->_version;
  }  
  
  public function hasKeys() {
    static $has_keys;

    if (isset($has_keys) === false) {
      $has_keys = (sizeof($this->getKeys()) > 0) ? true : false;
    }

    return $has_keys;
  }  
  
  public function remove() {
    global $lC_Database, $lC_Language;

    if ($this->hasKeys()) {
      $Qdel = $lC_Database->query('delete from :table_configuration where configuration_key in (":configuration_key")');
      $Qdel->bindTable(':table_configuration', TABLE_CONFIGURATION);
      $Qdel->bindRaw(':configuration_key', implode('", "', $this->getKeys()));
      $Qdel->execute();
    }
/*
    if (file_exists('../includes/languages/' . $lC_Language->getCode() . '/modules/' . $this->_group . '/' . $this->_code . '.xml')) {
      foreach ($lC_Language->extractDefinitions($lC_Language->getCode() . '/modules/' . $this->_group . '/' . $this->_code . '.xml') as $def) {
        $Qdel = $lC_Database->query('delete from :table_languages_definitions where definition_key = :definition_key and content_group = :content_group');
        $Qdel->bindTable(':table_languages_definitions', TABLE_LANGUAGES_DEFINITIONS);
        $Qdel->bindValue(':definition_key', $def['key']);
        $Qdel->bindValue(':content_group', $def['group']);
        $Qdel->execute();
      }

      lC_Cache::clear('languages');
    }
*/    
  }  
  
}
?>