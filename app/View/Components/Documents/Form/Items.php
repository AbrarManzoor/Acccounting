<?php

namespace App\View\Components\Documents\Form;

use App\Abstracts\View\Components\DocumentForm as Component;
use App\Models\Setting\Currency;
use App\Models\Setting\Tax;
use App\Models\Banking\Account;

class Items extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $currency = Currency::where('code', setting('default.currency'))->first();

        $taxes = Tax::enabled()->orderBy('name')->get();

        $accounts = Account::enabled()->orderBy('name')->get();

        return view('components.documents.form.items', compact('currency', 'taxes','accounts'));
    }
}
