@extends('formulairePaiement')
@section('contenu1')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Fiche de frais</title>
</head>
<body>

<!-- Saut de page -->
<div style="page-break-after: always;" ></div>

</body>
</html>

use App\Post;
use PDF;

public function getPostPdf (Post $post)
{
    $pdf = PDF::loadView('posts.show', compact('post'));

    return $pdf->stream();
}