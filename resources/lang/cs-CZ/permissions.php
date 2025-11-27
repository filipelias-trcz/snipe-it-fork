<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    | The following language lines are used in the user permissions system.
    | Each permission has a 'name' and a 'note' that describes
    | the permission in detail.
    |
    | DO NOT edit the keys (left-hand side) of each permission as these are
    | used throughout the system for translations.
    |---------------------------------------------------------------------------
    */

    "superuser" => [
        'name' => 'Super User',
        'note'       => 'Determines whether the user has full access to all aspects of the admin. This setting overrides ALL more specific and restrictive permissions throughout the system. ',
    ],
    'admin' => [
        'name' => 'Admin Access',
        'note'       => 'Determines whether the user has access to most aspects of the system EXCEPT the System Admin Settings. These users will be able to manage users, locations, categories, etc, but ARE constrained by Full Multiple Company Support if it is enabled.',
    ],

    'import' => [
        'name' => 'CSV Import',
        'note'       => 'This will allow users to import even if access to users, assets, etc is denied elsewhere.',
    ],

    'reports' => [
        'name' => 'Reports Access',
        'note'       => 'Determines whether the user has access to the Reports section of the application.',
    ],

    'assets' =>
        [
            'name' => 'Počet',
            'note' => 'Grants access to the Assets section of the application.',
    ],

    'assetsview' => [
        'name' => 'Zobrazit zařízení',
    ],

    'assetscreate' => [
        'name' => 'Vytvořit nové zařízení',
    ],

    'assetsedit' => [
        'name' => 'Upravit zařízení',
    ],

    'assetsdelete' => [
        'name' => 'Smazat zařízení',
    ],

    'assetscheckin' => [
        'name' => 'Převzít',
        'note' => 'Převzít zařízení zpět do inventáře, která jsou momentálně vydána.',
    ],

    'assetscheckout' => [
        'name' => 'Vydat',
        'note' => 'Přiřadit zařízení v inventáři jejich vydáním.',
    ],

    'assetsaudit' => [
        'name' => 'Audit zařízení',
        'note' => 'Umožňuje uživateli označit zařízení jako fyzicky inventarizované.',
    ],

    'assetsviewrequestable' => [
        'name' => 'Zobrazit požadovatelné zařízení',
        'note' => 'Povolit uživateli zobrazit zařízení označený jako požadovatelný.',
    ],

    'assetsviewencrypted-custom-fields' => [
        'name' => 'Zobrazit šifrovaná vlastní pole',
        'note' => 'Povolit uživateli zobrazit a upravovat šifrovaná vlastní pole na zařízeních.',
    ],

    'accessories'   => [
        'name' => 'Příslušenství',
        'note'       => 'Umožňuje přístup do sekce Příslušenství aplikace.',
    ],

    'accessoriesview' => [
        'name' => 'Zobrazit příslušenství',
    ],
    'accessoriescreate' => [
        'name' => 'Vytvořit nové příslušenství',
    ],
    'accessoriesedit' => [
        'name' => 'Upravit příslušenství',
    ],
    'accessoriesdelete' => [
        'name' => 'Odstranit příslušenství',
    ],
    'accessoriescheckout' => [
        'name' => 'Vydat příslušenství',
        'note' => 'Přiřadit příslušenství v inventáři jejich vydáním.',
    ],
    'accessoriescheckin' => [
        'name' => 'Převzít příslušenství',
        'note' => 'Převzít příslušenství zpět do inventáře, která jsou momentálně vydána.',
    ],
    'accessoriesfiles' => [
        'name' => 'Spravovat soubory příslušenství',
        'note' => 'Umožňuje uživateli nahrávat, stahovat a mazat soubory spojené s příslušenstvím.',
    ],
    'consumables'   => [
        'name' => 'Spotřební materiál',
        'note'       => 'Umožňuje přístup do sekce Spotřební materiál aplikace.',
    ],
    'consumablesview' => [
        'name' => 'Zobrazit spotřební materiál',
    ],
    'consumablescreate' => [
        'name' => 'Vytvořit nový spotřební materiál',
    ],
    'consumablesedit' => [
        'name' => 'Upravit spotřební materiál',
    ],
    'consumablesdelete' => [
        'name' => 'Odstranit spotřební materiál',
    ],
    'consumablescheckout' => [
        'name' => 'Vydat spotřební materiál',
        'note' => 'Přiřadit spotřební materiál v inventáři jejich vydáním.',
    ],
    'consumablesfiles' => [
        'name' => 'Spravovat soubory spotřebního materiálu',
        'note' => 'Umožňuje uživateli nahrávat, stahovat a mazat soubory spojené se spotřebním materiálem.',
    ],
    'licenses'   => [
        'name' => 'Licence',
        'note'       => 'Umožňuje přístup do sekce Licence aplikace.',
    ],
    'licensesview' => [
        'name' => 'Zobrazit licence',
    ],
    'licensescreate' => [
        'name' => 'Vytvořit nové licence',
    ],
    'licensesedit' => [
        'name' => 'Upravit licence',
    ],
    'licensesdelete' => [
        'name' => 'Odstranit licence',
    ],
    'licensescheckout' => [
        'name' => 'Přiřadit licence',
        'note' => 'Umožňuje uživateli přiřadit licence k zařízením nebo uživatelům.',
        ],
    'licensescheckin' => [
        'name' => 'Odstranit přiřazení licencí',
        'note' => 'Umožňuje uživateli odstranit přiřazení licencí ze zařízení nebo uživatelů.',
    ],
    'licensesfiles' => [
        'name' => 'Spravovat soubory licencí',
        'note' => 'Umožňuje uživateli nahrávat, stahovat a mazat soubory spojené s licencemi.',
    ],
    'licenseskeys' => [
        'name' => 'Spravovat klíče licencí',
        'note' => 'Umožňuje uživateli zobrazit produktové klíče spojené s licencemi.',
    ],
    'components'   => [
        'name' => 'Komponenty',
        'note'       => 'Umožňuje přístup do sekce Komponenty aplikace.',
    ],
    'componentsview' => [
        'name' => 'Zobrazit komponenty',
    ],
    'componentscreate' => [
        'name' => 'Vytvořit nové komponenty',
    ],
    'componentsedit' => [
        'name' => 'Upravit komponenty',
    ],
    'componentsdelete' => [
        'name' => 'Odstranit komponenty',
    ],
    'componentsfiles' => [
        'name' => 'Spravovat soubory komponent',
        'note' => 'Umožňuje uživateli nahrávat, stahovat a mazat soubory spojené s komponentami.',
    ],
    'componentscheckout' => [
        'name' => 'Vydat komponenty',
        'note' => 'Přiřadit komponenty v inventáři jejich vydáním.',
    ],
    'componentscheckin' => [
        'name' => 'Převzít komponenty',
        'note' => 'Převzít komponenty zpět do inventáře, které jsou momentálně vydány.',
    ],
    'kits'   => [
        'name' => 'Předdefinované sady',
        'note'       => 'Umožňuje přístup do sekce Předdefinované sady.',
    ],
    'kitsview' => [
        'name' => 'Zobrazit předdefinované sady',
    ],
    'kitscreate' => [
        'name' => 'Vytvořit nové předdefinované sady',
    ],
    'kitsedit' => [
        'name' => 'Upravit předdefinované sady',
    ],
    'kitsdelete' => [
        'name' => 'Odstranit předdefinované sady',
    ],
    'users'   => [
        'name' => 'Uživatelé',
        'note'       => 'Umožňuje přístup do sekce uživatelské účty.',
    ],
    'usersview' => [
        'name' => 'Zobrazit uživatele',
    ],
    'userscreate' => [
        'name' => 'Vytvořit nové uživatele',
    ],
    'usersedit' => [
        'name' => 'Upravit uživatele',
    ],
    'usersdelete' => [
        'name' => 'Odstranit uživatele',
    ],
    'models'   => [
        'name' => 'Modely',
        'note'       => 'Umožňuje přístup do sekce Modely.',
    ],
    'modelsview' => [
        'name' => 'Zobrazit Modely',
    ],

    'modelscreate' => [
        'name' => 'Vytvořit nové modely',
    ],
    'modelsedit' => [
        'name' => 'Upravit modely',
    ],
    'modelsdelete' => [
        'name' => 'Odstranit modely',
    ],
    'categories'   => [
        'name' => 'Kategorie',
        'note'       => 'Umožňuje přístup do sekce Kategorie.',
    ],
    'categoriesview' => [
        'name' => 'Zobrazit kategorie',
    ],
    'categoriescreate' => [
        'name' => 'Vytvořit nové kategorie',
    ],
    'categoriesedit' => [
        'name' => 'Upravit kategorie',
    ],
    'categoriesdelete' => [
        'name' => 'Odstranit kategorie',
    ],
    'departments'   => [
        'name' => 'Oddělení',
        'note'       => 'Umožňuje přístup do sekce Oddělení.',
    ],
    'departmentsview' => [
        'name' => 'Zobrazit oddělení',
    ],
    'departmentscreate' => [
        'name' => 'Vytvořit nové oddělení',
    ],
    'departmentsedit' => [
        'name' => 'Upravit oddělení',
    ],
    'departmentsdelete' => [
        'name' => 'Odstranit oddělení',
    ],
    'locations'   => [
        'name' => 'Umístění',
        'note'       => 'Umožňuje přístup do sekce Umístění.',
    ],
    'locationsview' => [
        'name' => 'Zobrazit umístění',
    ],
    'locationscreate' => [
        'name' => 'Vytvořit nové umístění',
    ],
    'locationsedit' => [
        'name' => 'Upravit umístění',
    ],
    'locationsdelete' => [
        'name' => 'Odstranit umístění',
    ],
    'status-labels'   => [
        'name' => 'Označení stavu',
        'note'       => 'Umožňuje přístup do sekce Označení stavu.',
    ],
    'statuslabelsview' => [
        'name' => 'Zobrazit označení stavu',
    ],
    'statuslabelscreate' => [
        'name' => 'Vytvořit nové označení stavu',
    ],
    'statuslabelsedit' => [
        'name' => 'Upravit označení stavu',
    ],
    'statuslabelsdelete' => [
        'name' => 'Odstranit označení stavu',
    ],
    'custom-fields'   => [
        'name' => 'Vlastní pole',
        'note'       => 'Umožňuje přístup do sekce Vlastní pole používané aktivy.',
    ],
    'customfieldsview' => [
        'name' => 'Zobrazit vlastní pole',
    ],
    'customfieldscreate' => [
        'name' => 'Vytvořit nové vlastní pole',
    ],
    'customfieldsedit' => [
        'name' => 'Upravit vlastní pole',
    ],
    'customfieldsdelete' => [
        'name' => 'Odstranit vlastní pole',
    ],
    'suppliers'   => [
        'name' => 'Dodavatelé',
        'note'       => 'Umožňuje přístup do sekce Dodavatelé.',
    ],
    'suppliersview' => [
        'name' => 'Zobrazit dodavatele',
    ],
    'supplierscreate' => [
        'name' => 'Vytvořit nové dodavatele',
    ],
    'suppliersedit' => [
        'name' => 'Upravit dodavatele',
    ],
    'suppliersdelete' => [
        'name' => 'Odstranit dodavatele',
    ],
    'manufacturers'   => [
        'name' => 'Výrobci',
        'note'       => 'Umožňuje přístup do sekce Výrobci.',
    ],
    'manufacturersview' => [
        'name' => 'Zobrazit výrobce',
    ],
    'manufacturerscreate' => [
        'name' => 'Vytvořit nové výrobce',
    ],
    'manufacturersedit' => [
        'name' => 'Upravit výrobce',
    ],
    'manufacturersdelete' => [
        'name' => 'Odstranit výrobce',
    ],
    'companies'   => [
        'name' => 'Firmy',
        'note'       => 'Umožňuje přístup do sekce Firmy.',
    ],
    'companiesview' => [
        'name' => 'Zobrazit firmy',
    ],
    'companiescreate' => [
        'name' => 'Vytvořit nové firmy',
    ],
    'companiesedit' => [
        'name' => 'Upravit firmy',
    ],
    'companiesdelete' => [
        'name' => 'Odstranit firmy',
    ],
    'user-self-accounts' => [
        'name' => 'Úprava svého účtu',
        'note'       => 'Umožňuje běžným uživatelům spravovat určité aspekty jejich vlastních uživatelských účtů.',
    ],
    'selftwo-factor' => [
        'name' => 'Správa dvoufaktorové autentizace',
        'note'       => 'Umožňuje uživatelům povolit, zakázat a spravovat dvoufaktorovou autentizaci pro jejich vlastní účty.',
    ],
    'selfapi' => [
        'name' => 'Správa API tokenů',
        'note'       => 'Umožňuje uživatelům vytvářet, zobrazovat a odvolávat své vlastní API tokeny. Uživatelské tokeny budou mít stejná oprávnění jako uživatel, který je vytvořil.',
    ],
    'selfedit-location' => [
        'name' => 'Úprava umístění',
        'note'       => 'Umožňuje uživatelům upravovat umístění spojené s jejich vlastním uživatelským účtem.',
    ],
    'selfcheckout-assets' => [
        'name' => 'Samostatné vypůjčení zařízení',
        'note'       => 'Umožňuje uživatelům vypůjčit si zařízení sami bez zásahu správce.',
    ],
    'selfview-purchase-cost' => [
        'name' => 'Zobrazit nákupní cenu',
        'note'       => 'Umožňuje uživatelům zobrazit nákupní cenu položek ve svém zobrazení účtu.',
    ],

    'depreciations' => [
        'name' => 'Správa odpisů',
        'note'       => 'Umožňuje uživatelům spravovat a zobrazovat podrobnosti o odpisu zařízení.',
    ],
    'depreciationsview' => [
        'name' => 'Zobrazit podrobnosti o odpisu',
    ],
    'depreciationsedit' => [
        'name' => 'Upravit nastavení odpisů',
    ],
    'depreciationsdelete' => [
        'name' => 'Odstranit záznamy o odpisu',
    ],
    'depreciationscreate' => [
        'name' => 'Vytvořit záznamy o odpisu',
    ],

    'grant_all' => 'Přiřadit všechna oprávnění pro :area',
    'deny_all' => 'Odepřít všechna oprávnění pro :area',
    'inherit_all' => 'Dědit všechna oprávnění pro :area ze skupin oprávnění',
    'grant' => 'Přiřadit oprávnění pro :area',
    'deny' => 'Odepřít oprávnění pro :area',
    'inherit' => 'Dědit oprávnění pro :area ze skupin oprávnění',
    'use_groups' => 'Důrazně doporučujeme používat skupiny oprávnění místo přiřazování jednotlivých oprávnění pro snadnější správu.'

);
