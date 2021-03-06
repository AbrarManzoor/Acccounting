<?php

namespace App\View\Components\Documents\Form;

use App\Abstracts\View\Components\DocumentForm as Component;
use App\Models\Setting\Currency;
use App\Models\Banking\Account;

class Totals extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $currencies = Currency::enabled()->pluck('name', 'code');
        $currency = Currency::where('code', setting('default.currency'))->first();
        $accounts = Account::enabled()->orderBy('name')->get();

        return view('components.documents.form.totals', compact('currencies', 'currency','accounts'));
    }
}
