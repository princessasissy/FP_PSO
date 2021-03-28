<?php

return [

    'bill_number'           => 'Fakturanummer',
    'bill_date'             => 'Fakturadatum',
    'total_price'           => 'Summa pris',
    'due_date'              => 'Förfallodatum',
    'order_number'          => 'Ordernummer',
    'bill_from'             => 'Faktura från',

    'quantity'              => 'Antal',
    'price'                 => 'Pris',
    'sub_total'             => 'Delsumma',
    'discount'              => 'Rabatt',
    'item_discount'         => 'Radrabatt',
    'tax_total'             => 'Summa moms',
    'total'                 => 'Summa',

    'item_name'             => 'Artikelnamn | Artikelnamn',

    'show_discount'         => ':discount % Rabatt',
    'add_discount'          => 'Lägg till rabatt',
    'discount_desc'         => 'av delsumman',

    'payment_due'           => 'Betalning',
    'amount_due'            => 'Fordran',
    'paid'                  => 'Betald',
    'histories'             => 'Historia',
    'payments'              => 'Betalningar',
    'add_payment'           => 'Lägg till betalning',
    'mark_paid'             => 'Markera som betald',
    'mark_received'         => 'Markerad som mottagen',
    'mark_cancelled'        => 'Markera som avbruten',
    'download_pdf'          => 'Ladda ner PDF',
    'send_mail'             => 'Skicka E-post',
    'create_bill'           => 'Skapa faktura',
    'receive_bill'          => 'Mottag faktura',
    'make_payment'          => 'Gör betalning',

    'messages' => [
        'draft'             => 'Detta är ett <b>DRAFT</b> förslag och kommer att stämmas av innan den mottages.',

        'status' => [
            'created'       => 'Skapad den :date',
            'receive' => [
                'draft'     => 'Inte skickat',
                'received'  => 'Mottagen :date',
            ],
            'paid' => [
                'await'     => 'Väntar på betalning',
            ],
        ],
    ],

];
