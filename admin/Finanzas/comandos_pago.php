<?php
                        // ejemplos de prueba
                        $reportes = [
                            ["id" => 1, "nombre" => "Carlos Mendoza", "banco" => "Banco Mercantil", "ref" => "98231", "monto" => "45.00"],
                            ["id" => 2, "nombre" => "María Alejandra Silva", "banco" => "Banesco", "ref" => "10442", "monto" => "60.00"],
                            ["id" => 3, "nombre" => "Juan Carlos Pérez", "banco" => "BBVA", "ref" => "55421", "monto" => "35.50"]
                        ];

                        foreach ($reportes as $pago) {
                            $id = $pago['id'];
                            echo "<tr>";
                            
                            // Nombre del Propietario y la Etiqueta Dinámica
                            echo "<td class='ps-4'>
                                    <div class='fw-bold text-dark'>{$pago['nombre']}</div>
                                    <span id='badge-{$id}' class='badge bg-warning text-dark mt-1'>por validar</span>
                                  </td>";
                            
                            // Datos de la transferencia
                            echo "<td>
                                    <div class='small text-muted'>
                                        <strong>Banco:</strong> {$pago['banco']}<br>
                                        <strong>Ref:</strong> #{$pago['ref']}<br>
                                        <strong>Monto:</strong> <span class='text-dark fw-bold'>\${$pago['monto']}</span>
                                    </div>
                                  </td>";
                            
                            // Espacio vacío para la foto del comprobante
                            echo "<td class='text-center'>
                                    <div class='espacio-comprobante'>
                                        <span>Sin Foto</span>
                                    </div>
                                  </td>";
                            
                            // Botones de Acción
                            echo "<td class='text-center'>
                                    <div class='d-inline-flex gap-2'>
                                        <button type='button' class='btn btn-success btn-sm px-3' onclick='actualizarEstado({$id}, \"aprobado\")'>
                                            Aprobar
                                        </button>
                                        <button type='button' class='btn btn-outline-secondary btn-sm px-3' onclick='actualizarEstado({$id}, \"rechazado\")'>
                                            Rechazar
                                        </button>
                                    </div>
                                  </td>";
                            echo "</tr>";
                        }
                        ?>