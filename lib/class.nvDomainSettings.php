<?php class nvDomainSettings
{


    public function __construct()
    {
        $this->addon = rex_addon::get('nv_domainsettings');
        $this->domain = rex_yrewrite::getCurrentDomain();
    }

    public static function getValue($sKey = null)
    {

        $oSettings = new nvDomainSettings;

        $iDomainsId = $oSettings->domain->getId();

        if (!$iDomainsId) {
            //return "nvDomainSettings | Domain not found in YRewrite";
            return;
        }

        $oQuery = rex_yform_manager_table::get('nv_domainsettings')->query();
        $oQuery->where('domains_id', $iDomainsId, '=');
        $oItem = $oQuery->findOne();
      

        if (!$oItem->getValue('id')) {
            //return "nvDomainSettings | Domain not found in nvDomainSettings";
            return;
        }
/*
        if ($sKey != "") {
            if (!isset($oItem->getValue($sKey))) {
                return "nvDomainSettings | Field $sKey not found";
            }
        }
*/




        if ($sKey != "") {
            return $oItem->getValue($sKey);
        } else {
            return $oItem;
        }
    }
}
