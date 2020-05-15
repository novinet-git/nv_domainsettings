<?php

rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'data/yform_manager_tableset_export_tables_nv_domainsettings.json')));
rex_yform_manager_table::deleteCache();