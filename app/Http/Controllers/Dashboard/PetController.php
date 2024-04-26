<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;
use App\Http\Requests\Pet\PetStoreRequest; // Importa la clase de validación
use App\Models\Customer; // Importa el modelo Customer
use App\DataTables\PetsDataTable;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PetsDataTable $dataTable)
    {
        $titleSubHeader = "Mascotas";
        $descriptionSubHeader = "Listado de mascotas";
    
        $pageTitle = "Mascotas";
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('mascotas.create').'" class="btn btn-sm btn-primary" role="button">Registrar Mascota</a>';
    
        return $dataTable->render('global.datatable', compact('pageTitle', 'assets', 'titleSubHeader', 'descriptionSubHeader', 'headerAction'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titleSubHeader = "Mascotas";
        $descriptionSubHeader = "Registrar nueva mascota";
        
        // Obtener la lista de clientes disponibles
        $customers = Customer::all();

        return view('pets.register', compact('titleSubHeader', 'descriptionSubHeader', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetStoreRequest $request)
    {
        // Guardar la nueva mascota en la base de datos.
        $pet = new Pet();
        $pet->name = $request->name;
        $pet->pet_type_id = $request->pet_type_id;
        $pet->breed = $request->breed;
        $pet->weight = $request->weight;
        $pet->height = $request->height;
        $pet->customer_id = $request->customer_id;
        $pet->save();

        return redirect()->route('pets.index')->with('success', 'Mascota registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        // Mostrar los detalles de una mascota específica.
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        // Mostrar el formulario para editar una mascota.
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        // Actualizar los detalles de la mascota en la base de datos.
        $pet->update($request->all());
        return redirect()->route('pets.index')->with('success', 'Detalles de la mascota actualizados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        // Eliminar una mascota de la base de datos.
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Mascota eliminada correctamente.');
    }
}
