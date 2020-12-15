using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class EstatusPersona
    {
        public int IdEstatusPersona { get; set; }
        public string Codigo { get; set; }
        public string Nombre { get; set; }
        public bool? Activo { get; set; }
    }
}
