Imports System.Data.OleDb
Public Class Form1

    Sub kosongkanform()
        TextBox1.Text = ""
        TextBox2.Text = ""
        TextBox3.Text = ""
        TextBox4.Text = ""
        TextBox5.Text = ""
        TextBox1.Focus()
    End Sub

    Sub matikanform()
        TextBox1.Enabled = False
        TextBox2.Enabled = False
        TextBox3.Enabled = False
        TextBox4.Enabled = False
        TextBox5.Enabled = False
        TextBox1.Focus()
    End Sub

    Sub hidupkanform()
        TextBox1.Enabled = True
        TextBox2.Enabled = True
        TextBox3.Enabled = True
        TextBox4.Enabled = True
        TextBox5.Enabled = True
        TextBox1.Focus()
    End Sub

    Sub tampilkandata()
        Call koneksi()
        da = New OleDbDataAdapter("Select * From tabeldata", conn)
        ds = New DataSet
        ds.Clear()
        da.Fill(ds, "tabeldata")
        DataGridView1.DataSource = ds.Tables("tabeldata")
        DataGridView1.ReadOnly = True
    End Sub

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Call hidupkanform()
        Call tampilkandata()
    End Sub

    Private Sub Simpan_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Simpan.Click
        If TextBox1.Text = "" Or TextBox2.Text = "" Then
            MsgBox("data belum lengkap..!")
            Exit Sub
        Else
            Call koneksi()
            cmd = New OleDb.OleDbCommand("Select * from tabeldata where NIM='" & TextBox1.Text & "'", conn)
            rd = cmd.ExecuteReader
            rd.Read()
            If Not rd.HasRows Then
                Call koneksi()
                Dim Simpan As String
                Simpan = "insert into tabeldata values('" & TextBox1.Text & "','" & TextBox2.Text & "','" & TextBox3.Text & "','" & TextBox4.Text & "','" & TextBox5.Text & "')"
                cmd = New OleDb.OleDbCommand(Simpan, conn)
                cmd.ExecuteNonQuery()
                MsgBox("simpan data sukses..!", MsgBoxStyle.Information, "perhatian")
            Else
                MsgBox("kode sudah ada...")
            End If
            Call matikanform()
            Call kosongkanform()
            Call tampilkandata()
        End If
    End Sub

    Private Sub Batal_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Batal.Click
        Call matikanform()
        Call kosongkanform()
    End Sub

   

    Private Sub DataGridView1_CellMouseClick(ByVal sender As Object, ByVal e As System.Windows.Forms.DataGridViewCellMouseEventArgs) Handles DataGridView1.CellMouseClick
        On Error Resume Next
        TextBox1.Text = DataGridView1.Rows(e.RowIndex).Cells(0).Value
        TextBox2.Text = DataGridView1.Rows(e.RowIndex).Cells(1).Value
        TextBox3.Text = DataGridView1.Rows(e.RowIndex).Cells(2).Value
        TextBox4.Text = DataGridView1.Rows(e.RowIndex).Cells(3).Value
        TextBox5.Text = DataGridView1.Rows(e.RowIndex).Cells(4).Value

        Call hidupkanform()
        TextBox1.Enabled = False
    End Sub

    Private Sub Ubah_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Ubah.Click
        If TextBox1.Text = "" Or TextBox2.Text = "" Then
            MsgBox("NIM dan Nama belum diisi")
            Exit Sub
        Else
            Call koneksi()
            Dim ubah As String = "update tabeldata set Nama='" & TextBox2.Text & "', Alamat='" & TextBox3.Text & "',NoTelp='" & TextBox4.Text & "',Email='" & TextBox5.Text & "' where NIM='" & TextBox1.Text & "'"
            cmd = New OleDb.OleDbCommand(ubah, conn)
            cmd.ExecuteNonQuery()
            MsgBox("ubah data sukses..!", MsgBoxStyle.Information, "perhatian")
        End If

        Call matikanform()
        Call kosongkanform()
        Call tampilkandata()
    End Sub

    Private Sub Hapus_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Hapus.Click
        If TextBox1.Text = "" Then
            MsgBox("tidak ada data yang akan dihapus")
            Exit Sub
        Else
            Call koneksi()
            cmd = New OleDb.OleDbCommand("delete * from tabeldata where NIM='" & TextBox1.Text & "'", conn)
            cmd.ExecuteNonQuery()
            MsgBox("hapus data sukses...")
            Call matikanform()
            Call kosongkanform()
            Call tampilkandata()
        End If

    End Sub
End Class
