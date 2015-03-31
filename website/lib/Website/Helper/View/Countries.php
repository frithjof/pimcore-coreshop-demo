<?php

namespace Website\Helper\View;

class Countries
{
    public $view;

    public function setView(\Zend_View_Interface $view)
    {
        $this->view = $view;
    }

    public function countries()
    {
        $locale = new \Zend_Locale($this->language);
        $countries = $locale->getTranslationList('Territory', $this->language, 2);
        asort($countries, SORT_LOCALE_STRING);

        $countriesToUpsort = array("AT", "DE", "CH");
        $countriesToUpsortValues = array();
        // unset invalid countries

        foreach ($countriesToUpsort as $country) {
            $countriesToUpsortValues[$country] = $countries[$country];

            unset($countries[$country]);
        }

        unset($countries['SU'], $countries['ZZ'], $countries['IM'], $countries['JE'], $countries['VD']);

        $countries = $countriesToUpsortValues + $countries;

        return $countries;
    }
}
