using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class TipoVenta
    {
        public int IdTipoVenta { get; set; }
        public string Nombre { get; set; }
        public bool? Activo { get; set; }
    }
}
