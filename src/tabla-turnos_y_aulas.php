<?php 
require_once 'conexion.php'; 
$resultado = $conexion->query("SELECT id_turno, nombre_turno, hora_entrada, hora_salida FROM turnos");
$resultado2 = $conexion->query("SELECT id_aula,codigo_aula,pabellon,tipo FROM aulas");
?> 
<!-- TABLA DE TURNOS -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del turno</th>
            <th>Hora de entrada</th>
            <th>Hora de salida</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($resultado && $resultado->num_rows > 0): ?>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($fila['id_turno']) ?></td>
                    <td><?= htmlspecialchars($fila['nombre_turno']) ?></td>
                    <td><?= htmlspecialchars($fila['hora_entrada']) ?></td>
                    <td><?= htmlspecialchars($fila['hora_salida']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No hay turnos registrados</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<!-- TABLA AULAS -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo del aula</th>
            <th>Pabellon</th>
            <th>Tipo de Aula</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($resultado2 && $resultado2->num_rows > 0): ?>
            <?php while ($fila2 = $resultado2->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($fila2['id_aula']) ?></td>
                    <td><?= htmlspecialchars($fila2['codigo_aula']) ?></td>
                    <td><?= htmlspecialchars($fila2['pabellon']) ?></td>
                    <td><?= htmlspecialchars($fila2['tipo']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No hay turnos registrados</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
