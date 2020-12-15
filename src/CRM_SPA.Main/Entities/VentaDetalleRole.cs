using System;
using System.Collections.Generic;

namespace CRM_SPA.Main.Entities
{
    public partial class VentaDetalleRole
    {
        public int IdVentaDetalleRole { get; set; }
        public int? IdVentaDetalle { get; set; }
        public int? IdParteRole { get; set; }
        public int? IdTipoParteRole { get; set; }
        public DateTimeOffset? FechaInicial { get; set; }
        public DateTimeOffset? FechaFinal { get; set; }
    }
}
