USE [PruebaGym]
GO
/****** Object:  Table [dbo].[Ciudad]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ciudad](
	[id_ciudad] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_ciudad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Cliente]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Cliente](
	[id_cliente] [int] IDENTITY(1,1) NOT NULL,
	[id_ciudad] [int] NOT NULL,
	[id_sede] [int] NOT NULL,
	[nombre] [varchar](50) NOT NULL,
	[telefono] [varchar](50) NOT NULL,
	[direccion] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_cliente] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Ejercicio]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ejercicio](
	[id_ejercicio] [int] IDENTITY(1,1) NOT NULL,
	[id_rutina] [int] NOT NULL,
	[nombre] [varchar](50) NOT NULL,
	[descripcion] [varchar](100) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_ejercicio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Instructor]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Instructor](
	[id_instructor] [int] IDENTITY(1,1) NOT NULL,
	[id_sede] [int] NOT NULL,
	[nombre] [varchar](50) NOT NULL,
	[telefono] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_instructor] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Mensualidad]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Mensualidad](
	[id_mensualidad] [int] IDENTITY(1,1) NOT NULL,
	[id_cliente] [int] NOT NULL,
	[cantidad_dias] [int] NOT NULL,
	[valor] [int] NOT NULL,
	[estado] [varchar](5) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_mensualidad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Producto]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Producto](
	[id_producto] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) NULL,
	[precio] [int] NOT NULL,
	[cantidad] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_producto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Rutina]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Rutina](
	[id_rutina] [int] IDENTITY(1,1) NOT NULL,
	[id_instructor] [int] NOT NULL,
	[nombre] [varchar](50) NOT NULL,
	[descripcion] [varchar](400) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_rutina] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Sede]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Sede](
	[id_sede] [int] IDENTITY(1,1) NOT NULL,
	[id_ciudad] [int] NOT NULL,
	[nombreSede] [varchar](50) NOT NULL,
	[direccion] [varchar](50) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_sede] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Venta]    Script Date: 31/05/2017 9:37:27 a.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Venta](
	[id_venta] [int] IDENTITY(1,1) NOT NULL,
	[id_sede] [int] NOT NULL,
	[id_cliente] [int] NOT NULL,
	[id_producto] [int] NOT NULL,
	[cantidad_producto] [int] NOT NULL,
	[total] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_venta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
ALTER TABLE [dbo].[Cliente]  WITH CHECK ADD  CONSTRAINT [Fk_cliente_ciudad] FOREIGN KEY([id_ciudad])
REFERENCES [dbo].[Ciudad] ([id_ciudad])
GO
ALTER TABLE [dbo].[Cliente] CHECK CONSTRAINT [Fk_cliente_ciudad]
GO
ALTER TABLE [dbo].[Cliente]  WITH CHECK ADD  CONSTRAINT [Fk_cliente_sede] FOREIGN KEY([id_sede])
REFERENCES [dbo].[Sede] ([id_sede])
GO
ALTER TABLE [dbo].[Cliente] CHECK CONSTRAINT [Fk_cliente_sede]
GO
ALTER TABLE [dbo].[Ejercicio]  WITH CHECK ADD  CONSTRAINT [Fk_rutina_Ejercicio] FOREIGN KEY([id_rutina])
REFERENCES [dbo].[Rutina] ([id_rutina])
GO
ALTER TABLE [dbo].[Ejercicio] CHECK CONSTRAINT [Fk_rutina_Ejercicio]
GO
ALTER TABLE [dbo].[Instructor]  WITH CHECK ADD  CONSTRAINT [Fk_Sede_instructor] FOREIGN KEY([id_sede])
REFERENCES [dbo].[Sede] ([id_sede])
GO
ALTER TABLE [dbo].[Instructor] CHECK CONSTRAINT [Fk_Sede_instructor]
GO
ALTER TABLE [dbo].[Mensualidad]  WITH CHECK ADD  CONSTRAINT [Fk_Mensualidad_id_cliente] FOREIGN KEY([id_cliente])
REFERENCES [dbo].[Cliente] ([id_cliente])
GO
ALTER TABLE [dbo].[Mensualidad] CHECK CONSTRAINT [Fk_Mensualidad_id_cliente]
GO
ALTER TABLE [dbo].[Rutina]  WITH CHECK ADD  CONSTRAINT [Fk_Rutina_instructor] FOREIGN KEY([id_instructor])
REFERENCES [dbo].[Instructor] ([id_instructor])
GO
ALTER TABLE [dbo].[Rutina] CHECK CONSTRAINT [Fk_Rutina_instructor]
GO
ALTER TABLE [dbo].[Sede]  WITH CHECK ADD  CONSTRAINT [Fk_Sede_id_ciudad] FOREIGN KEY([id_ciudad])
REFERENCES [dbo].[Ciudad] ([id_ciudad])
GO
ALTER TABLE [dbo].[Sede] CHECK CONSTRAINT [Fk_Sede_id_ciudad]
GO
ALTER TABLE [dbo].[Venta]  WITH CHECK ADD  CONSTRAINT [Fk_ventas_cliente] FOREIGN KEY([id_cliente])
REFERENCES [dbo].[Cliente] ([id_cliente])
GO
ALTER TABLE [dbo].[Venta] CHECK CONSTRAINT [Fk_ventas_cliente]
GO
ALTER TABLE [dbo].[Venta]  WITH CHECK ADD  CONSTRAINT [Fk_ventas_producto] FOREIGN KEY([id_producto])
REFERENCES [dbo].[Producto] ([id_producto])
GO
ALTER TABLE [dbo].[Venta] CHECK CONSTRAINT [Fk_ventas_producto]
GO
ALTER TABLE [dbo].[Venta]  WITH CHECK ADD  CONSTRAINT [Fk_ventas_sede] FOREIGN KEY([id_sede])
REFERENCES [dbo].[Sede] ([id_sede])
GO
ALTER TABLE [dbo].[Venta] CHECK CONSTRAINT [Fk_ventas_sede]
GO
