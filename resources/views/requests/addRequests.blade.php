@extends('templates.template')

@section('content')
    <h1>Realizar Pedido</h1>  
        <form action= "{{route('requests.store')}}" method="post" class="form-group">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Descrição" id="description" name="description" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="date" class="form-control" placeholder="Data do pedido" id="open_date" name="open_date" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Data limite para conclusão do pedido" id="closed_date" name="closed_date">
                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="number" class="form-control" placeholder="Número de cópias" id="quantity" name="quantity" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
 
            <div class="form-group">
                <label for="colored">Gender</label>
                <div class="colored"><label>
                <input type="radio" name="colored" value="color">Cores</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="colored" value="blackAndWhite">Preto e branco</label>
                </div>
            </div>

            <div class="form-group">
                <label for="stapled">Gender</label>
                <div class="stapled"><label>
                <input type="radio" name="stapled" value="yes">Com agrafos</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="stapled" value="no">Sem agrafos</label>
                </div>
            </div>

            <div class="form-group">
                <label for="paper_size">Gender</label>
                <div class="paper_size"><label>
                <input type="radio" name="paper_size" value="a3">A3</label>
                </div>
                <div class="radio">
                <label><input type="radio" name="paper_size" value="a4">A4</label>
                </div>
            </div>

            <div class="form-group has-feedback">
                <select name="paper_type" class="form-control">
                    <option>Escolha o tipo de papel</option>
                    <option value="rascunho">Rascunho</option>
                    <option value="normal">Normal</option>
                    <option value="fotografico">Fotográfico</option>
                </select>
            </div>
             <div class="form-group has-feedback">
                <select name="file" class="form-control">
                    <option>Escolha o conteudo multimedia</option>
                    <option value="image">Imagem</option>
                    <option value="fileWord">Ficheiro Word</option>
                    <option value="fileExcel">Ficheiro Excel</option>
                    <option value="fileODT">Ficheiro ODT</option>
                    <option value="filePDF">Ficheiro PDF</option>
                </select>
            </div>
            
            <div class="form-group">
                <div>
                   <button type="submit" class="btn btn-primary" name="ok">Add</button>
        <a type="submit" class="btn btn-default" href="{{route('users.home')}}">Cancel</a>
                </div>
            </div>
        </form>
 
@endsection