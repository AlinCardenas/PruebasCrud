@csrf
<x-label value="Nombre" />
<x-input id="nombre" class="block mt-1 w-full" type="text" name="name"/>
<x-input-error for='name'/>
<x-label value="Cantidad" />
<x-input id="cantidad" class="block mt-1 w-full" type="number" name="amount"/>
<x-input-error for='amount'/>
<x-label value="Concepto de pago" />
<x-input id="payment_concept" class="block mt-1 w-full" type="text" name="payment_concept"/>
<x-input-error for='payment_concept'/>
<x-label value="Fecha de pago" />
<x-input id="payment_date" class="block mt-1 w-full" type="date" name="payment_date"/>
<x-input-error for='payment_date'/>
<x-label value="Folio" />
<x-input id="payment_date" class="block mt-1 w-full" type="number" name="invoice"/>
<x-input-error for='invoice'/>
<x-button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-3">
    Registrar
</x-button>

