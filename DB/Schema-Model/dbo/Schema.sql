USE master 
GO  

SET NOCOUNT ON 
DECLARE @DBName varchar(50) = 'Crmspa'
DECLARE @Spidstr varchar(8000) = ''
DECLARE @ConnKilled smallint = 0  

IF db_id(@DBName) < 4 
BEGIN 
	PRINT 'Connections to system databases cannot be killed' 
	RETURN 
END 

SELECT @Spidstr=coalesce(@Spidstr,',' )+'kill '+convert(varchar, spid)+ '; ' 
FROM master..sysprocesses WHERE dbid=db_id(@DBName) 
 
IF LEN(@Spidstr) > 0
BEGIN 
	EXEC(@Spidstr) 
	PRINT @Spidstr
	SELECT @ConnKilled = COUNT(1) 
	FROM master..sysprocesses WHERE dbid=db_id(@DBName) 
END

IF (EXISTS (SELECT name FROM master.dbo.sysdatabases WHERE ('[' + name + ']' = @DBName OR name = @DBName)))
BEGIN
	DROP DATABASE Crmspa
END	
GO

/*CREACION DE LA BASE DE DATOS **************************************************************************************************/
/********************************************************************************************************************************/
BEGIN
DECLARE @Default_data_path VARCHAR (700);
DECLARE @Default_log_path VARCHAR (700);
DECLARE @sqlstring varchar(1024)

SET @Default_data_path = (SELECT
    CONVERT(VARCHAR(700), SERVERPROPERTY('INSTANCEDEFAULTDATAPATH'))
        + 'Crmspa.mdf');

SET @Default_log_path = ( SELECT
    CONVERT(VARCHAR(700), SERVERPROPERTY('INSTANCEDEFAULTLOGPATH'))
        + 'Crmspa_log.ldf')


SET @sqlstring = 'CREATE DATABASE [Crmspa] 	
	CONTAINMENT = NONE
	ON PRIMARY 
	    ( NAME = N''Crmspa'', FILENAME = '''+@Default_data_path+''' , SIZE = 10240KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB  )
	LOG ON 
	    ( NAME = N''Crmspa_log'', FILENAME = '''+@Default_log_path+''' , SIZE = 10240KB , MAXSIZE = 512GB , FILEGROWTH = 10%)
	COLLATE SQL_Latin1_General_CP1_CI_AS'

EXEC(@sqlstring)

IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
BEGIN
	EXEC [Crmspa].[dbo].[sp_fulltext_database] @action = 'enable'
END

ALTER DATABASE [Crmspa] SET ANSI_NULL_DEFAULT OFF 
ALTER DATABASE [Crmspa] SET ANSI_NULLS OFF 
ALTER DATABASE [Crmspa] SET ANSI_PADDING OFF 
ALTER DATABASE [Crmspa] SET ANSI_WARNINGS OFF 
ALTER DATABASE [Crmspa] SET ARITHABORT OFF 
ALTER DATABASE [Crmspa] SET AUTO_CLOSE OFF 
ALTER DATABASE [Crmspa] SET AUTO_CREATE_STATISTICS ON 
ALTER DATABASE [Crmspa] SET AUTO_SHRINK OFF 
ALTER DATABASE [Crmspa] SET AUTO_UPDATE_STATISTICS ON 
ALTER DATABASE [Crmspa] SET CURSOR_CLOSE_ON_COMMIT OFF 
ALTER DATABASE [Crmspa] SET CURSOR_DEFAULT  GLOBAL 
ALTER DATABASE [Crmspa] SET CONCAT_NULL_YIELDS_NULL OFF 
ALTER DATABASE [Crmspa] SET NUMERIC_ROUNDABORT OFF 
ALTER DATABASE [Crmspa] SET QUOTED_IDENTIFIER OFF 
ALTER DATABASE [Crmspa] SET RECURSIVE_TRIGGERS OFF 
ALTER DATABASE [Crmspa] SET  DISABLE_BROKER 
ALTER DATABASE [Crmspa] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
ALTER DATABASE [Crmspa] SET DATE_CORRELATION_OPTIMIZATION OFF 
ALTER DATABASE [Crmspa] SET TRUSTWORTHY OFF 
ALTER DATABASE [Crmspa] SET ALLOW_SNAPSHOT_ISOLATION OFF 
ALTER DATABASE [Crmspa] SET PARAMETERIZATION SIMPLE 
ALTER DATABASE [Crmspa] SET READ_COMMITTED_SNAPSHOT OFF 
ALTER DATABASE [Crmspa] SET RECOVERY SIMPLE
ALTER DATABASE [Crmspa] SET  MULTI_USER 
ALTER DATABASE [Crmspa] SET PAGE_VERIFY CHECKSUM  
ALTER DATABASE [Crmspa] SET DB_CHAINING OFF 
ALTER DATABASE [Crmspa] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 

EXEC sys.sp_db_vardecimal_storage_format N'Crmspa', N'ON'

END

GO

