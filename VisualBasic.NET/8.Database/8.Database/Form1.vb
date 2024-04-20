Imports System.Data.OleDb
Public Class Form1
    Sub kosong()
        kode.Clear()
        nama.Clear()
        kode.Focus()
    End Sub

    Sub isi()
        nama.Clear()
        nama.Focus()
    End Sub

    Sub TampilJenis()
        da = New OleDbDataAdapter("Select * From Jenis", conn)
        ds = New DataSet
        ds.Clear()
        da.Fill(ds, "Jenis")
        DataGridView1.DataSource = ds.Tables("Jenis")
        DataGridView1.Refresh()
    End Sub

    Sub AturGrid()
        DataGridView1.Columns(0).Width = 60
        DataGridView1.Columns(1).Width = 200
        DataGridView1.Columns(0).HeaderText = "KODE JENIS"
        DataGridView1.Columns(1).HeaderText = "NAMA JENIS"
    End Sub

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        Call koneksi()
        Call TampilJenis()
        Call kosong()
        Call AturGrid()
    End Sub

    Private Sub simpan_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles simpan.Click
        If kode.Text = "" Or nama.Text = "" Then
            MsgBox("data belum lengkap..!")
            kode.Focus()
            Exit Sub
        Else
            cmd = New OleDbCommand("Select * from Jenis where KodeJenis='" & kode.Text & "'", conn)
            rd = cmd.ExecuteReader
            rd.Read()
            If Not rd.HasRows Then
                Dim Simpan As String = "insert into Jenis(KodeJenis,Jenis)values" & "('" & kode.Text & "','" & nama.Text & "')"
                cmd = New OleDbCommand(Simpan, conn)
                cmd.ExecuteNonQuery()
                MsgBox("simpan data sukses..!", MsgBoxStyle.Information, "perhatian")
            End If
            Call TampilJenis()
            Call kosong()
            kode.Focus()
        End If
    End Sub

    Private Sub nama_KeyPress(ByVal sender As Object, ByVal e As System.Windows.Forms.KeyPressEventArgs) Handles nama.KeyPress
        nama.MaxLength = 50
        If e.KeyChar = Chr(13) Then
            nama.Text = UCase(nama.Text)
        End If
    End Sub

    Private Sub DataGridView1_CellContentClick(ByVal sender As Object, ByVal e As System.Windows.Forms.DataGridViewCellEventArgs) Handles DataGridView1.CellContentClick
        Dim i As Integer
        i = Me.DataGridView1.CurrentRow.Index
        With DataGridView1.Rows.Item(i)
            Me.kode.Text = .Cells(0).Value
            Me.nama.Text = .Cells(1).Value
        End With
    End Sub

    Private Sub Ubah_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles Ubah.Click
        If kode.Text = "" Then
            MsgBox("kode jenis belum diisi")
            kode.Focus()
            Exit Sub
        Else
            Dim ubah As String = "Update Jenis set Jenis= '" & nama.Text & "' Where KodeJenis='" & kode.Text & "'"
            cmd = New OleDbCommand(ubah, conn)
            cmd.ExecuteNonQuery()
            MsgBox("ubah data sukses..!", MsgBoxStyle.Information, "perhatian")
            Call TampilJenis()
            Call kosong()
            kode.Focus()
        End If
    End Sub

    Private Sub Hapus_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Hapus.Click
        If kode.Text = "" Then
            MsgBox("kode buku belum diisi")
            kode.Focus()
            Exit Sub
        ElseIf MessageBox.Show("yakin akan menghapus data jenis" & kode.Text & "?", "", MessageBoxButtons.YesNo) = Windows.Forms.DialogResult.Yes Then
            cmd = New OleDbCommand("delete * from Jenis where KodeJenis='" & kode.Text & "'", conn)
            cmd.ExecuteNonQuery()
            Call kosong()
            Call TampilJenis()
        Else
            Call kosong()
        End If
    End Sub

    Private Sub Batal_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Batal.Click
        Call kosong()
    End Sub

    Private Sub kode_KeyPress(ByVal sender As Object, ByVal e As System.Windows.Forms.KeyPressEventArgs) Handles kode.KeyPress
        kode.MaxLength = 2
        If e.KeyChar = Chr(13) Then
            cmd = New OleDbCommand("Select * From jenis where KodeJenis='" & kode.Text & "'", conn)
            rd = cmd.ExecuteReader
            rd.Read()
            If rd.HasRows = True Then
                nama.Text = rd.Item(1)
                nama.Focus()
            Else
                Call isi()
                nama.Focus()
            End If
        End If
    End Sub

    Private Sub TextBox3_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles TextBox3.Click
        cmd = New OleDbCommand("select * from Jenis where KodeJenis like '%" & TextBox3.Text & "%'", conn)
        rd = cmd.ExecuteReader
        rd.Read()
        If rd.HasRows Then
            da = New OleDbDataAdapter("Select * From Jenis where KodeJenis like '%" & TextBox3.Text & "%'", conn)
            ds = New DataSet
            da.Fill(ds, "Dapat")
            DataGridView1.DataSource = ds.Tables("Dapat")
            DataGridView1.ReadOnly = True
        Else
            MsgBox("Data Tidak ditemukan")
        End If
    End Sub
End Class