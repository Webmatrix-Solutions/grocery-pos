<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{

    // Display the form to add a new product //
    public function create()
    {
        return view('products.create-product');
    }

    // Store New Product //
    public function storeNewProduct(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'stock_quantity' => 'required|integer|min:0',
                'category' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:1000',
            ]);

            // Prepare the data to encode in QR
            $qrData = "Product: {$request->name}\nPrice: {$request->price}\nStock: {$request->stock_quantity}";

            // Generate a unique filename
            $fileName = 'qr_' . Str::uuid() . '.png';

            // Generate the QR code and save it to storage/app/public/qr/
            $qrImage = QrCode::format('png')
                ->size(300)
                ->generate($qrData);

            // Save to storage (make sure 'public' disk is linked)
            Storage::disk('public')->put("qr/{$fileName}", $qrImage);

            $qrPath = "storage/qr/{$fileName}"; // public path

            $addProduct = Products::create([
                'name' => $request->name,
                'barcode' => $qrPath,
                'price' => $request->price,
                'stock_quantity' => $request->stock_quantity,
                'category' => $request->category,
                'description' => $request->description,
            ]);

            if (!$addProduct) {
                throw new \Exception('Failed to add product');
            }

            return response()->json([
                'message' => 'Product added successfully',
                'product' => $addProduct,
            ], 201);
        } catch (\Throwable $th) {
            throw new \Exception('Error storing product: ' . $th->getMessage());
        }
    }
}
