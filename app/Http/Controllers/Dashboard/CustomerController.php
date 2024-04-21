<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest; // Importa la clase StoreRequest
use App\DataTables\CustomersDataTable;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CustomersDataTable $dataTable)
    {
        $titleSubHeader = "Clientes";
        $descriptionSubHeader = "Listado de clientes";

        $pageTitle = "Clientes";
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('clientes.create').'" class="btn btn-sm btn-primary" role="button">Registrar Cliente</a>';

        return $dataTable->render('global.datatable', compact('pageTitle', 'assets', 'titleSubHeader', 'descriptionSubHeader', 'headerAction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titleSubHeader = "Clientes";
        $descriptionSubHeader = "Registrar nuevo cliente";

        return view('customers.register', compact('titleSubHeader', 'descriptionSubHeader'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        $customer = new Customer();

        $customer->name = $validatedData['name'];
        $customer->last_name = $validatedData['last_name'];
        $customer->address = $validatedData['address'];
        $customer->city = $validatedData['city'];
        $customer->alternative_contact_name = $validatedData['alternative_contact_name'];
        $customer->alternative_contact_phone_number = $validatedData['alternative_contact_phone_number'];
        $customer->email = $validatedData['email'];
        $customer->phone_number = $validatedData['phone_number'];

        $customer->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $titleSubHeader = "Clientes";
        $descriptionSubHeader = "Actualizar datos cliente";

        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('titleSubHeader', 'descriptionSubHeader', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        // Lógica de actualización del cliente
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $customer = Customer::findOrFail($id);

        $status = 'errors';
        $message= __('global.delete_form_error', ['form' => __('customer.name')]);

        if($customer != '') {
            $customer->delete();
            $status = 'success';
            $message= __('global.delete_form', ['form' => __('customer.name')]);
        }

        if(request()->ajax()) {
            return response()->json(['status' => true, 'message' => $message, 'datatable_reload' => 'dataTable_wrapper']);
        }

        return redirect()->back()->with($status,$message);


        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
