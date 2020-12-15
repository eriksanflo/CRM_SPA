using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class TipoTarjetaCredito
    {
        public int IdTipoTarjetaCredito { get; set; }
        public string Nombre { get; set; }
        public bool? Activo { get; set; }
    }
}
