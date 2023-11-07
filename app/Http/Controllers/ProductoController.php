<?php

namespace App\Http\Controllers;

use App\Models\AprobacionProducto;
use App\Models\User;
use App\Models\DisponibilidadProducto;
use App\Models\CategoriaProducto;
use App\Models\Image;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prophecy\Promise\ReturnPromise;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Image::all();
        $producto = Producto::select('aprobacion_productos.*','disponibilidad_productos.*','categoria_productos.*','productos.*')
        
        ->join('aprobacion_productos','aprobacion_productos.id_aprobacion','=','productos.aprobacion')
        ->join('disponibilidad_productos','disponibilidad_productos.id_disponibilidad','=','productos.disponibilidad')
        ->join('categoria_productos','categoria_productos.id_categoria','=','productos.categoria')
        ->where('aprobacion_productos.id_aprobacion','=','1')
        ->orderby('productos.disponibilidad','ASC')
        ->get();


        $user = Auth::User();
        $id = $user->id;

        
        
            $roles = "[]";
            $aprobado = "off";
            return view('/MyShop/MODULOS/Tienda/Productos/index', compact('producto','id','imagenes','roles','aprobado'));
    }

    /**ACÁ SE MUESTRAN LOS PRODUCTOS PROPIOS DE CADA USUARIO*/
    public function propios()
    {
        $imagenes = Image::all();

        $user = Auth::User();
        $id = $user->id;

        $productos_propios = Producto::select('aprobacion_productos.*','disponibilidad_productos.*','categoria_productos.*','productos.*')
        
        ->join('aprobacion_productos','aprobacion_productos.id_aprobacion','=','productos.aprobacion')
        ->join('disponibilidad_productos','disponibilidad_productos.id_disponibilidad','=','productos.disponibilidad')
        ->join('categoria_productos','categoria_productos.id_categoria','=','productos.categoria')
        ->where('productos.vendedor','=',$id)
        ->orderby('productos.disponibilidad','ASC')
        ->get();

            $roles = "[]";
            $aprobado = "on";
            return view('/MyShop/MODULOS/Tienda/Productos/propios', compact('productos_propios','imagenes','roles','aprobado'));


    }


    public function administrar()
    {
        $imagenes = Image::all();
        
        $user = Auth::User();
        $id = $user->id;
        
        $productos = Producto::select('aprobacion_productos.*','disponibilidad_productos.*','categoria_productos.*','productos.*')
        
        ->join('aprobacion_productos','aprobacion_productos.id_aprobacion','=','productos.aprobacion')
        ->join('disponibilidad_productos','disponibilidad_productos.id_disponibilidad','=','productos.disponibilidad')
        ->join('categoria_productos','categoria_productos.id_categoria','=','productos.categoria')
        ->orderby('productos.disponibilidad','ASC')
        ->get();
        
        return view('/MyShop/MODULOS/Tienda/Administrador/index', compact('productos','imagenes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = CategoriaProducto::select('categoria_productos.*')
        ->get();
        $disponibilidad = DisponibilidadProducto::select('disponibilidad_productos.*')
        ->get();
        $aprobacion = AprobacionProducto::select('aprobacion_productos.*')
        ->get();
        $images = Image::select('images.*')
        ->get();

        
        $user = Auth::User();
        $id = $user->id;

        $vendedor = User::select('users.*')
        ->where('users.id','=',$id)
        ->get();

        return view('/MyShop/MODULOS/Tienda/Productos/create', compact('vendedor','categoria','disponibilidad','images'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'url1' => 'required|image',
            'nombre_producto' => 'required',
            'descripcion_producto' => 'required|min:10|max:1000',
            'precio_producto' => 'required',
            'contacto_vendedor' => 'required',
            'estado_producto' => 'required',
            'terminos_condiciones' => 'required',
            'vendedor' => 'required',
            'categoria' => 'required',
            'disponibilidad' => 'required',

        ]);


        $imagen = new Image();

        //SE GUARDA LA IMAGEN EN LA CARPETA STORAGE
        $url1 =  $request->file('url1')->store('public/productos');
        //SE LE DA UN LINK A LA IMAGEN PARA PODER ACCEDER A ELLA
        $link1 = Storage::url($url1);
        //SE GUARDAN LOS LINKS EN LA DB PARA LUEGO MOSTRAR LAS IMAGENES
        $imagen->url1 = $link1;

        //SE VALIDA LA EXISTENCIA DE LAS IMAGENES OPCIONALES A GUARDAR
        if ($request->url2 <> "") {
            $request->validate([
                'url2' => 'required|image',
            ]);
            $url2 =  $request->file('url2')->store('public/productos');
            $link2 = Storage::url($url2);
            $imagen->url2 = $link2;
        } else {
             # code...
        }
        if ($request->url3 <> "") {
            $url3 =  $request->file('url3')->store('public/productos');
            $request->validate([
                'url3' => 'required|image',
            ]);
            $link3 = Storage::url($url3);
            $imagen->url3 = $link3;
        } else {
            # code...
        }
        if ($request->url4 <> "") {
            $url4 =  $request->file('url4')->store('public/productos');
            $request->validate([
                'url4' => 'required|image',
            ]);
            $link4 = Storage::url($url4);
            $imagen->url4 = $link4;
        } else {
            # code...
        }
        if ($request->url5 <> "") {
            $url5 =  $request->file('url5')->store('public/productos');
            $request->validate([
                'url5' => 'required|image',
            ]);
            $link5 = Storage::url($url5);
            $imagen->url5 = $link5;
        } else {
            # code...
        }

        $imagen->save();

        /*SE HACE UN CONSULA A LA TABLA DE IMAGENES PARA SACAR EL ID DEL GRUPO DE IMAGENES QUE ACABA DE SER CREADO Y GUARDARLO EN LA TABLA PRODUCTOS 
        PARA LUEGO RELACIONAR LAS IMAGENES CON EL PRODUCTO CORRESPONDIENTE*/
        $id = Image::select('images.id_image')
        ->where('url1','=',$link1)
        ->get();

        //MEDIANTE UN FOREACH SE LISTAN LOS DATOS Y LUEGO SE DEFINE UNA VARIABLE QUE ALMACENE EL ID PARA GUARDARLO EN LA TABLA PRODUCTOS  $producto->imagenes =$id2;
        foreach ($id as $items){
            $id2 = $items->id_image;
        }
        
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->imagenes =$id2;
        $producto->contacto_vendedor = $request->contacto_vendedor;
        $producto->estado_producto = $request->estado_producto;
        $producto->terminos_condiciones = $request->terminos_condiciones;
        $producto->vendedor = $request->vendedor;
        $producto->categoria = $request->categoria;
        $producto->disponibilidad = $request->disponibilidad;

        $producto->save();

        return redirect()->route('producto.index', compact('producto'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $images_producto = $producto->imagenes;
        $user_vendedor = $producto->vendedor;
        $aprobacion = $producto->aprobacion;
        $categoria = $producto->categoria;
        $disponibilidad = $producto->disponibilidad;



        //CONSULTA PARA VALIDAR EDICION DE PRODUCTO
        $user = Auth::User();
        $id = $user->id;

        $imagenes = Image::select('images.*')
        ->where('images.id_image','=',$images_producto)
        ->get();

        $vendedor = User::select('users.*')
        ->where('users.id','=',$user_vendedor)
        ->get();

        $aprobacion = AprobacionProducto::select('aprobacion_productos.*')
        ->where('aprobacion_productos.id_aprobacion','=',$aprobacion)
        ->get();

        $categoria = CategoriaProducto::select('categoria_productos.*')
        ->where('categoria_productos.id_categoria','=',$categoria)
        ->get();

        $disponibilidad = DisponibilidadProducto::select('disponibilidad_productos.*')
        ->where('disponibilidad_productos.id_disponibilidad','=',$disponibilidad)
        ->get();

        $user = Auth::User();
        $id = $user->id;
        

            $roles = "[]";
            $aprobado = "on";
            return view('/MyShop/MODULOS/Tienda/Productos/show', compact('vendedor','aprobacion','categoria','disponibilidad','producto','id','imagenes','roles','aprobado'));
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto, Image $imagenes)
    {
        $images_producto = $producto->imagenes;


        $imagenes = Image::select('images.*')
        ->where('images.id_image','=',$images_producto)
        ->get();

        $aprobacion = AprobacionProducto::select('aprobacion_productos.*')
        ->get();

        $categoria = CategoriaProducto::select('categoria_productos.*')
        ->get();
        $disponibilidad = DisponibilidadProducto::select('disponibilidad_productos.*')
        ->get();

        $user = Auth::User();
        $id = $user->id;
        
        $vendedor = User::select('users.*')
        ->where('users.id','=',$id)
        ->get();


            $roles = "[]";
            $aprobado = "on";
            return view('/MyShop/MODULOS/Tienda/Productos/edit', compact('producto','vendedor','categoria','disponibilidad','imagenes','aprobacion','roles','aprobado'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        

        $producto ->update($request->all());

        return redirect()->route('producto.show', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
