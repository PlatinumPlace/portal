<?php

namespace App\Http\Controllers;

use App\Models\Zoho;
use Illuminate\Http\Request;

class PolizasController extends Controller
{
    public function index($id)
    {
        $api = new Zoho;
        $detalles = $api->getRecord("Quotes", $id);
        $planes = $detalles->getLineItems();
        return view("polizas.index", [
            "detalles" => $detalles,
            "planes" => $planes,
            "api" => $api
        ]);
    }

    public function vehiculo(Request $request)
    {
        $api = new Zoho;
        $plan = explode(",", $request->input("plan"));
        $planid = $plan[0];
        $primaneta = $plan[1];
        $isc = $plan[2];
        $primatotal = $plan[3];
        $poliza = $plan[4];
        $comisionnobe = $plan[5];
        $comisionintermediario = $plan[6];
        $comisionaseguradora = $plan[7];
        $comisioncorredor = $plan[8];
        $aseguradoraid = $plan[9];

        $registro = [
            "Account_Name" => session("empresaid"),
            "Contact_Name" => session("id"),
            "Apellido" => $request->input("apellido"),
            "Aseguradora" => $aseguradoraid,
            "A_o_veh_culo" => $request->input("a_o"),
            "Chasis" => $request->input("chasis"),
            "Coberturas" => $planid,
            "Color" => $request->input("color"),
            "Comisi_n_aseguradora" => $comisionaseguradora,
            "Comisi_n_corredor" => $comisioncorredor,
            "Comisi_n_intermediario" => $comisionintermediario,
            "Condiciones" => $request->input("condiciones"),
            "Correo_electr_nico" => $request->input("correo"),
            "Direcci_n" => $request->input("direccion"),
            "Estado" => "Activo",
            "Stage" => "Cerrado ganado",
            "Closing_Date" => date("Y-m-d", strtotime(date("Y-m-d") . "+ 1 years")),
            "Fecha_de_nacimiento" => $request->input("fecha_nacimiento"),
            "Amount" => $comisionnobe,
            "ISC" => $isc,
            "Marca" => $request->input("marca"),
            "Modelo" => $request->input("modelo"),
            "Nombre" => $request->input("nombre"),
            "Deal_Name" => $request->input("chasis"),
            "Placa" => $request->input("placa"),
            "Plan" => $request->input("plantipo"),
            "Prima_neta" => $primaneta,
            "Prima_total" => $primatotal,
            "P_liza" => $poliza,
            "Ramo" => "Automóvil",
            "RNC_C_dula" => $request->input("rnc_cedula"),
            "Suma_asegurada" => $request->input("suma"),
            "Tel_Celular" => $request->input("telefono"),
            "Tel_Residencia" => $request->input("tel_residencia"),
            "Tel_Trabajo" => $request->input("tel_trabajo"),
            "Type" => "Vehículo",
            "Tipo_p_liza" => "Declarativa",
            "Tipo_veh_culo" => $request->input("modelotipo"),
            "Uso" => $request->input("uso"),
            "Vigencia_desde" => date("Y-m-d"),
            "Vigencia_hasta" => date("Y-m-d", strtotime(date("Y-m-d") . "+ 1 years")),
        ];

        $id = $api->createRecords("Deals", $registro);
        $api->update("Quotes", $request->input("id"), ["Deal_Name" => $id]);

        $ruta = $request->file('cotizacion')->store('public');
        $api->uploadAttachment("Deals", $id, storage_path("app/$ruta"));
        unlink(storage_path("app/$ruta"));

        return redirect("poliza/$id");
    }

    public function detalles($id)
    {
        $api = new Zoho;
        $detalles = $api->getRecord("Deals", $id);
        return view("polizas.detalles", [
            "detalles" => $detalles,
            "api" => $api
        ]);
    }
}