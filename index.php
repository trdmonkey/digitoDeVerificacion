<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software POS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    @media (max-width: 768px) {
      .responsive-label {
        display: block;
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
  <header>
  <!-- Header con el menú -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">POS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opción 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Opción 2</a>
        </li>
        <!-- Puedes agregar más opciones de menú aquí -->
      </ul>
      <!-- Aquí puedes agregar elementos adicionales en la barra de navegación, como un botón de búsqueda o un botón de usuario -->
    </div>
  </nav>
</header>

    
<main>
  <div class="row">
    <div class="col-lg-6">
      <h2>Información de Venta</h2>
      <div class="form-group">
        <label for="vendedor">Vendedor:</label>
        <select class="form-control" id="vendedor" name="vendedor">
          <!-- Opciones de vendedores -->
        </select>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha:</label>
        <label id="fecha">Fecha actual</label>
      </div>
      <div class="form-group">
        <label for="hora">Hora:</label>
        <label id="hora">Hora actual</label>
      </div>
      <div class="form-group">
        <label for="cliente">Cliente:</label>
        <select class="form-control" id="cliente" name="cliente">
          <!-- Opciones de clientes -->
        </select>
      </div>
      <div class="form-group">
        <label for="producto">Producto:</label>
        <select class="form-control" id="producto" name="producto">
          <!-- Opciones de productos -->
        </select>
      </div>
      <div class="form-group">
        <label for="detallesProducto">Detalles del Producto:</label>
        <textarea class="form-control" id="detallesProducto" name="detallesProducto" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="precioProducto">Precio del Producto:</label>
        <textarea class="form-control" id="precioProducto" name="precioProducto" rows="1"></textarea>
      </div>
      <!-- Más campos según tus necesidades -->
      <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </div>
    <div class="col-lg-6">
        <h2>Detalles Cliente y Productos</h2>
        <div class="form-group">
            <label for="datosCliente">Datos del Cliente:</label>
            <!-- Aquí puedes agregar campos para los datos del cliente -->
            <div class="responsive-label" id="nombreClienteLabel">Nombre:</div>
            <div class="responsive-label" id="razonSocialLabel">Razón Social:</div>
            <div class="responsive-label" id="cupoCreditoLabel">Cupo de Crédito:</div>
            <div class="responsive-label" id="anticiposLabel">Anticipos:</div>
            <div class="responsive-label" id="direccionLabel">Dirección:</div>
            <div class="responsive-label" id="telefonoLabel">Teléfono:</div>
        </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Código</th>
              <th>Producto</th>
              <th>Und</th>
              <th>VR Unitario</th>
              <th>Cantidad</th>
              <th>Dcto (%)</th>
              <th>Subtotal</th>
              <th>IVA (%)</th>
              <th>Total</th>
              <th></th> <!-- Columna para botón eliminar producto -->
            </tr>
          </thead>
          <tbody id="cartBody">
            <!-- Aquí se agregarán dinámicamente los productos -->
          </tbody>
        </table>
      </div>
      <!-- Botón para eliminar producto -->
    </div>
  </div>
</main>


    <footer>
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <h2>Resumen</h2>
                <!-- Mostrar fletes, seguro de transporte, total comisiones, etc. -->
                <p>Fletes: </p>
                <p>Seguro de transporte: </p>
                <p>Total comisiones: </p>
            </div>
            <div class="col-lg-6">
                <h2>Medios de Pago</h2>
                <!-- Mostrar efectivo, tarjetas debito, anticipos, tarjetas credito, cheques y saldo a favor. Con sus respectivos inputs para poner los valores -->
                <div class="form-group">
                <label for="efectivo">Efectivo:</label>
                <input type="text" class="form-control" id="efectivo" name="efectivo">
                </div>
                <div class="form-group">
                <label for="tarjetaDebito">Tarjetas Débito:</label>
                <input type="text" class="form-control" id="tarjetaDebito" name="tarjetaDebito">
                </div>
                <div class="form-group">
                <label for="anticipos">Anticipos:</label>
                <input type="text" class="form-control" id="anticipos" name="anticipos">
                </div>
                <div class="form-group">
                <label for="tarjetaCredito">Tarjetas Crédito:</label>
                <input type="text" class="form-control" id="tarjetaCredito" name="tarjetaCredito">
                </div>
                <div class="form-group">
                <label for="cheques">Cheques:</label>
                <input type="text" class="form-control" id="cheques" name="cheques">
                </div>
                <div class="form-group">
                <label for="saldoFavor">Saldo a Favor:</label>
                <input type="text" class="form-control" id="saldoFavor" name="saldoFavor">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
                <!-- Mostrar dcto pie de tiquete, sub total sin iva, total retenciones, total iva, total -->
                <p>Dcto pie de tiquete: </p>
                <p>Subtotal sin IVA: </p>
                <p>Total retenciones: </p>
                <p>Total IVA: </p>
                <p>Total: </p>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                <label for="formaPago">Forma de Pago:</label>
                <select class="form-control" id="formaPago" name="formaPago">
                    <option value="contado">Contado</option>
                    <option value="contadoVendedor">Contado Pagado al Vendedor</option>
                    <option value="credito">Crédito</option>
                </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary">Guardar Pedido</button>
            </div>
            </div>
        </div>
    </footer>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Aquí puedes incluir tus scripts de backend con PHP y JavaScript -->
</body>
</html>
