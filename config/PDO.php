<?php

class DatabaseHandler
{
  private static $_mHandler;
  private function __construct()
  {
  }
  private static function GetHandler()
  {
    if (!isset(self::$_mHandler))
    {
      try
      {
        self::$_mHandler =
            new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD,
            array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      }
      catch (PDOException $e)
      {
        self::Close();
        trigger_error($e->getMessage(), E_USER_ERROR);
      }
    }
    return self::$_mHandler;
  }
  public static function Close()
  {
    self::$_mHandler = null;
  }
  public static function Execute($sqlQuery, $params = null)
  {
    try
    {
      $database_handler = self::GetHandler();
      $statement_handler = $database_handler->prepare('SET NAMES UTF8; ' .$sqlQuery);
      $statement_handler->execute($params);
      if ($statement_handler) return true;
      return false;
    }
    catch(PDOException $e)
    {
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
  }
  public static function GetAll($sqlQuery, $params = null,
                                $fetchStyle = PDO::FETCH_ASSOC)
  {
    $result = null;
    try
    {
      $database_handler = self::GetHandler();
      $statement_handler = $database_handler->prepare($sqlQuery);
      $statement_handler->execute($params);
      $result = $statement_handler->fetchAll($fetchStyle);
    }
    catch(PDOException $e)
    {
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    return $result;
  }
  public static function GetRow($sqlQuery, $params = null,
                                $fetchStyle = PDO::FETCH_ASSOC)
  {
    $result = null;
    try
    {
      $database_handler = self::GetHandler();
      $statement_handler = $database_handler->prepare($sqlQuery);
      $statement_handler->execute($params);
      $result = $statement_handler->fetch($fetchStyle);
    }
    catch(PDOException $e)
    {
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    return $result;
  }
  public static function GetOne($sqlQuery, $params = null)
  {
    $result = null;
    try
    {
      $database_handler = self::GetHandler();
      $statement_handler = $database_handler->prepare($sqlQuery);
      $statement_handler->execute($params);
      $result = $statement_handler->fetch(PDO::FETCH_NUM);
      $result = $result[0];
    }
    catch(PDOException $e)
    {
      self::Close();
      trigger_error($e->getMessage(), E_USER_ERROR);
    }
    return $result;
  }
}
?>