<?php
/**
 * Ministore class
 *
 * @author      Stanley Sie <swookon@gmail.com>
 * @access      public
 * @version     Release: 1.0
 */

namespace Stanleysie\HkMinistore;

use \PDO as PDO;
use \Exception as Exception;

class Ministore
{
    /**
     * database
     *
     * @var object
     */
    private $database;

    /**
     * initialize
     */
    public function __construct($db = null)
    {
        $this->database = $db;
    }

    /**
     * delete ministore.
     * 
     * @param $id
     * @return bool
     */
    public function delMinistoreFromId($id)
    {
        try {
            $sql = 'DELETE FROM ministore
                    WHERE id = :id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':id' => $id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    } 
 
    /**
     * delete ministore from store id.
     * 
     * @param $table, $store_id
     * @return bool
     */
    public function delMinistoreFromStoreId($table, $store_id)
    {
        try {
            $sql = 'DELETE FROM ' . $table . ' WHERE store_id = :store_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':store_id' => $store_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }    

    /**
     * delete ministore member password resets form email.
     * 
     * @param $email
     * @return bool
     */
    public function delMinistoreFromEmail($email)
    {
        try {
            $sql = 'DELETE FROM ministore_member_password_resets
                    WHERE email = :email';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':email' => $email
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }
    
    /**
     * delete ministore member shipping info.
     * 
     * @param $member_id
     * @return bool
     */
    public function delMinistoreMemberShippingInfo($member_id)
    {
        try {
            $sql = 'DELETE FROM ministore_member_shipping_info
                    WHERE member_id = :member_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':member_id' => $member_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }

    /**
     * delete ministore from order id.
     * 
     * @param $order_id
     * @return bool
     */
    public function delMinistoreFromOrderId($table, $order_id)
    {
        try {
            $sql = 'DELETE FROM ' . $table . ' WHERE order_id = :order_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':order_id' => $order_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }
    
    /**
     * delete ministore product specifications.
     * 
     * @param $product_id
     * @return bool
     */
    public function delMinistoreProductSpecifications($product_id)
    {
        try {
            $sql = 'DELETE FROM ministore_product_specifications
                    WHERE product_id = :product_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':product_id' => $product_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }

    /**
     * delete ministore from site id.
     * 
     * @param $site_id
     * @return bool
     */
    public function delMinistoreFromSiteId($table, $site_id)
    {
        try {
            $sql = 'DELETE FROM ' . $table . ' WHERE site_id = :site_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':site_id' => $site_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }

    /**
     * delete sites.
     * 
     * @param $id
     * @return bool
     */
    public function delSitesFromId($id)
    {
        try {
            $sql = 'DELETE FROM sites
                    WHERE id = :id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':id' => $id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    }
    
    /**
     * delete site section element.
     * 
     * @param $group_id
     * @return bool
     */
    public function delSiteSectionElementFromGroupId($group_id)
    {
        try {
            $sql = 'DELETE FROM site_section_element
                    WHERE group_id = :group_id';
            $query = $this->database->prepare($sql);
            $query->execute([
                ':group_id' => $group_id
            ]);
            if ($query->rowCount() > 0) {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return false;
    } 
}
