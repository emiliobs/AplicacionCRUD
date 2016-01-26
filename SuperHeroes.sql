SELECT `heroes`.`IdHeroe`,
    `heroes`.`Nombre`,
    `heroes`.`Imagen`,
    `heroes`.`Descripcion`,
    `heroes`.`Editorial`
FROM `superheroes`.`heroes`;

SELECT `editorial`.`IdEditorial`,
    `editorial`.`Editorial`
FROM `superheroes`.`editorial`;