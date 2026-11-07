 <?php require conexion.php ?>
 
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
