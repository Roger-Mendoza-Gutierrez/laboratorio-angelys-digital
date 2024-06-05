<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();

        return view('documents.index')->with([
            'documents' => $documents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        Document::create($request->only(['name']));

        return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('documents.show')->with([
            'document' => $document
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('documents.edit')->with([
            'document' => $document
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document->update($request->only(['name']));

        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('documents.index');
    }
}
