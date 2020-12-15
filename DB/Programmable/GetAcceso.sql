USE Crmspa

DECLARE @user NVARCHAR(16), @password NVARCHAR(64)

SELECT * 
FROM dbo.Accesos AS A
WHERE
	A.Usuario = @user AND A.Password = @password
