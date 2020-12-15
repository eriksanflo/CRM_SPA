using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class MetodoPago
    {
        public int IdMetodoPago { get; set; }
        public string Nombre { get; set; }
        public string Descripcion { get; set; }
        public string Activo { get; set; }
    }
}
