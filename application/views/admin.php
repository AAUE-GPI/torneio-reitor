<div class="container" style="background-color: gray;">
  <h2>Torneio do Reitor Admin</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#equipas">Equipas</a></li>
    <li><a data-toggle="tab" href="#jogadores">Jogadores</a></li>
    <li><a data-toggle="tab" href="#grupos">Grupos</a></li>
    <li><a data-toggle="tab" href="#jogos">Jogos</a></li>
    <li><a data-toggle="tab" href="#resultados">Resultados</a></li>
  </ul>

  <div class="tab-content">
    <div id="equipas" class="tab-pane fade in active">
      <h3>Equipas</h3>
      <hr>
      <div class="input-group">
        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Adicionar Equipa">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="button">+</button>
        </span>
      </div>
      <br><br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Equipa</th>
            <th>Nº jogadores</th>
            <th>Grupo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Equipa 1</td>
            <td>5</td>
            <td>Grupo A</td>
          </tr>
          <tr>
            <td>Equipa 2</td>
            <td>15</td>
            <td>Grupo B</td>
          </tr>
          <tr>
            <td>Equipa 3</td>
            <td>3</td>
            <td>Grupo B</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="jogadores" class="tab-pane fade">
      <h3>Jogadores</h3>
      <div class="form-group">
        <label for="sel1">Seleciona uma equipa:</label>
        <select class="form-control" id="sel1">
          <option>Equipa 1</option>
          <option>Equipa 2</option>
          <option>Equipa 3</option>
          <option>Equipa 4</option>
        </select>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Adicionar Jogador">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="button">+</button>
        </span>
      </div>
      <br>
    </div>
    <div id="grupos" class="tab-pane fade">
      <h3>Adicionar equipa a um grupo</h3>
      <div class="form-group">
        <label for="sel1">Seleciona uma equipa:</label>
        <select class="form-control" id="sel1">
          <option>Equipa 1</option>
          <option>Equipa 2</option>
          <option>Equipa 3</option>
          <option>Equipa 4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1">Seleciona um grupo:</label>
        <select class="form-control" id="sel1">
          <option>Grupo 1</option>
          <option>Grupo 2</option>
          <option>Grupo 3</option>
          <option>Grupo 4</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <br><br>
    </div>
    <div id="jogos" class="tab-pane fade">
      <h3>Adicionar um jogo novo</h3>
      <div class="form-group">
        <label for="sel1">Seleciona uma equipa:</label>
        <select class="form-control" id="sel1">
          <option>Equipa 1</option>
          <option>Equipa 2</option>
          <option>Equipa 3</option>
          <option>Equipa 4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="sel1">Seleciona o adversário:</label>
        <select class="form-control" id="sel1">
          <option>Equipa 1</option>
          <option>Equipa 2</option>
          <option>Equipa 3</option>
          <option>Equipa 4</option>
        </select>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Dia/Mês">
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Hora">
        </div>
        <div class="col-xs-4">
          <input type="number" class="form-control" aria-describedby="basic-addon1" placeholder="Jornada">
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Adicionar</button>
      <br><br>
    </div>
    <div id="resultados" class="tab-pane fade">
      <h3>Adicionar um resultado</h3>
      <div class="form-group">
        <label for="sel1">Seleciona um jogo:</label>
        <select class="form-control" id="sel1">
          <option>Jogo 1</option>
          <option>Jogo 2</option>
          <option>Jogo 3</option>
          <option>Jogo 4</option>
        </select>
        <br>
        <div class="row">
          <div class="col-xs-2 col-xs-offset-1">
            <p>Equipa 1</p>
          </div>
          <div class="col-xs-2">
            <input type="number" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="col-xs-1 col-xs-offset-1">
            <p> X </p>
          </div>
          <div class="col-xs-2">
            <input type="number" class="form-control" aria-describedby="basic-addon1">
          </div>
          <div class="col-xs-2 col-xs-offset-1">
            <p>Equipa 2</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>