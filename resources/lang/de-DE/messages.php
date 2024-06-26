<?php

return [

    'success' => [
        'added'             => ':type hinzugefügt!',
        'created'			=> ':type wurde erstellt!',
        'updated'           => ':type aktualisiert!',
        'deleted'           => ':type gelöscht!',
        'duplicated'        => ':type dupliziert!',
        'imported'          => ':type importiert!',
        'import_queued'     => ':type Import ist geplant! Sie erhalten eine E-Mail, sobald dieser fertiggestellt ist.',
        'exported'          => ':type exportiert!',
        'export_queued'     => ':type Export ist geplant! Sie erhalten eine E-Mail, sobald dieser fertiggestellt ist.',
        'enabled'           => ':type aktiviert!',
        'disabled'          => ':type deaktiviert!',
        'connected'         => ':type verbunden!',
        'invited'           => ':type eingeladen!',
        'ended'             => ':type beendet!',

        'clear_all'         => 'Großartig! Du hast all deinen :type gelöscht.',
    ],

    'error' => [
        'over_payment'      => 'Fehler: Zahlung wurde nicht gebucht! Der eingegebenen Betrag überschreitet die Gesamtsumme: :amount',
        'not_user_company'  => 'Fehler: Sie haben nicht die Berechtigung um diese Firma zu verwalten!',
        'customer'          => 'Fehler: User wurde nicht angelegt! :name benutzt schon diese Email-Adresse.',
        'no_file'           => 'Fehler: Keine Datei ausgewählt!',
        'last_category'     => 'Fehler: Kann die letzte Kategorie :type nicht löschen!',
        'transfer_category' => 'Fehler: Kann die Transfer <b>:type</b> Kategorie nicht löschen!',
        'change_type'       => 'Fehler: Der Typ kann nicht geändert werden, da :text verwandt ist!',
        'invalid_apikey'    => 'Fehler: Der eingegebene API-Schlüssel ist ungültig!',
        'empty_apikey'      => 'Fehler: Sie haben den API Key nicht hinterlegt!  <a href=":url" class="font-bold underline underline-offset-4">Klicken Sie hier</a> um den API Key einzugeben.',
        'import_column'     => 'Fehler: :message. Name des Blattes: :sheet. Zeilennummer: :line.',
        'import_sheet'      => 'Fehler: Name des Blattes ist nicht gültig. Bitte die Beispieldatei überprüfen.',
        'same_amount'       => 'Fehler: Der Gesamtbetrag der Aufteilung muss genau der gleiche sein wie :transaction total: :amount',
        'over_match'        => 'Fehler: :type nicht verbunden! Der eingegebene Betrag darf die Summe der Zahlung nicht überschreiten: :amount',
    ],

    'warning' => [
        'deleted'           => 'Warnung: Sie dürfen <b>:name</b> nicht löschen, da :text dazu in Bezug steht.',
        'disabled'          => 'Warnung: Sie dürfen <b>:name</b> nicht deaktivieren, da :text dazu in Bezug steht.',
        'reconciled_tran'   => 'Warnung: Sie dürfen die Transaktion nicht ändern/löschen, da sie mit einem anderen Datensatz (Einnahme oder Ausgabe) verknüpft ist!',
        'reconciled_doc'    => 'Warnung: Sie dürfen :type nicht ändern/löschen, da Transaktionen abgeglichen wurden!',
        'disable_code'      => 'Warnung: Sie dürfen die Währung von <b>:name</b> nicht deaktivieren oder verändern, da :text dazu in Bezug steht.',
        'payment_cancel'    => 'Warnung: Sie haben Ihre letzte Zahlung :method abgebrochen!',
        'missing_transfer'  => 'Warnung: Die Überweisung, die mit dieser Transaktion zusammenhängt, fehlt. Sie sollten erwägen, diese Transaktion zu löschen.',
    ],

];
