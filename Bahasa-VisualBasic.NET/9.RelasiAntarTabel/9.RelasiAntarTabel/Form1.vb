Imports System.Data.OleDb
Public Class Form1

    Sub Kosong()
        TextBox1.Clear()
        ComboBox1.Text = ""
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox4.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        TextBox7.Clear()
        TextBox8.Clear()
        TextBox1.Focus()
    End Sub

    Sub Isi()
        ComboBox1.Text = ""
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox4.Clear()
        TextBox5.Clear()
        TextBox6.Clear()
        TextBox7.Clear()
        ComboBox1.Focus()
    End Sub

    Sub TampilBuku()
        da = New OleDbDataAdapter("select * from Buku", conn)
        ds = New DataSet
        ds.Clear()
        da.Fill(ds, "Buku")
        DataGridView1.DataSource = ds.Tables("Buku")
        DataGridView1.Refresh()
    End Sub

    Sub TampilJenis()
        cmd = New OleDbCommand("select KodeJenis From Jenis", conn)
        rd = cmd.ExecuteReader
        Do While rd.Read
            ComboBox1.Items.Add(rd.Item(0))
        Loop
    End Sub

    Sub AturGrid()
        DataGridView1.Columns(0).Width = 60
        DataGridView1.Columns(1).Width = 50
        DataGridView1.Columns(2).Width = 300
        DataGridView1.Columns(3).Width = 100
        DataGridView1.Columns(4).Width = 100
        DataGridView1.Columns(5).Width = 100
        DataGridView1.Columns(6).Width = 100
        DataGridView1.Columns(7).Width = 300

        DataGridView1.Columns(0).HeaderText = "KODE BARANG"
        DataGridView1.Columns(1).HeaderText = "KODE JENIS"
        DataGridView1.Columns(2).HeaderText = "JUDUL"
        DataGridView1.Columns(3).HeaderText = "PENGARANG"
        DataGridView1.Columns(4).HeaderText = "PENERBIT"
        DataGridView1.Columns(5).HeaderText = "JUMLAH"
        DataGridView1.Columns(6).HeaderText = "HARGA"
        DataGridView1.Columns(7).HeaderText = "DESKRIPSI"
    End Sub

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

        Call koneksi()
        Call TampilJenis()
        Call TampilBuku()
        Call Kosong()
        Call AturGrid()

    End Sub

    Private Sub ComboBox1_SelectedIndexChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ComboBox1.SelectedIndexChanged
        cmd = New OleDbCommand(" select * from Jenis where KodeJenis='" & ComboBox1.Text & "'", conn)
        rd = cmd.ExecuteReader
        rd.Read()
        If rd.HasRows = True Then
            TextBox8.Text = rd.Item(1)
        Else
            MsgBox("kode jenis ini tidak terdaftar")
        End If
    End Sub


    Private Sub simpan_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles simpan.Click
        If TextBox1.Text = "" Or ComboBox1.Text = "" Or TextBox2.Text = "" Or TextBox3.Text = "" Or TextBox4.Text = "" Or TextBox5.Text = "" Or TextBox6.Text = "" Then
            MsgBox("data belum lengkap..!")
            TextBox1.Focus()
            Exit Sub
        Else
            Call koneksi()
            cmd = New OleDbCommand("select * from Buku where KodeBuku='" & TextBox1.Text & "'", conn)
            rd = cmd.ExecuteReader
            rd.Read()
            If Not rd.HasRows Then
                Call koneksi()
                Dim simpan As String = "insert into Buku(KodeBuku,KodeJenis,Judul,Pengarang,Penerbit,JumlahBuku,Harga,Deskripsi)values" & "('" & TextBox1.Text & "','" & ComboBox1.Text & "', '" & TextBox2.Text & "','" & TextBox3.Text & "','" & TextBox4.Text & "','" & TextBox5.Text & "','" & TextBox6.Text & "','" & TextBox7.Text & "')"
                cmd = New OleDbCommand(simpan, conn)
                cmd.ExecuteNonQuery()
                MsgBox("simpan data sukses...!", MsgBoxStyle.Information, "perhatian")
            End If
            Call TampilBuku()
            Call Kosong()
            TextBox1.Focus()
        End If
    End Sub


    Private Sub batal_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles batal.Click
        Call Kosong()
    End Sub


    Private Sub tutup_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles tutup.Click
        Me.Close()
    End Sub

    Private Sub DataGridView1_CellMouseClick(ByVal sender As Object, ByVal e As System.Windows.Forms.DataGridViewCellMouseEventArgs) Handles DataGridView1.CellMouseClick
        On Error Resume Next
        TextBox1.Text = DataGridView1.Rows(e.RowIndex).Cells(0).Value
        ComboBox1.Text = DataGridView1.Rows(e.RowIndex).Cells(1).Value
        TextBox2.Text = DataGridView1.Rows(e.RowIndex).Cells(2).Value
        TextBox3.Text = DataGridView1.Rows(e.RowIndex).Cells(3).Value
        TextBox4.Text = DataGridView1.Rows(e.RowIndex).Cells(4).Value
        TextBox5.Text = DataGridView1.Rows(e.RowIndex).Cells(5).Value
        TextBox6.Text = DataGridView1.Rows(e.RowIndex).Cells(6).Value
        TextBox7.Text = DataGridView1.Rows(e.RowIndex).Cells(7).Value

        TextBox1.Enabled = False
    End Sub

    Private Sub hapus_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles hapus.Click
        If TextBox1.Text = "" Then
            MsgBox("tidak ada data yang akan dihapus")
            Exit Sub
        Else
            Call koneksi()
            cmd = New OleDbCommand("delete * from Buku where KodeBuku='" & TextBox1.Text & "'", conn)
            cmd.ExecuteNonQuery()
            MsgBox("hapus data sukses...")
            Call Kosong()
            Call TampilJenis()
            Call TampilBuku()
        End If

    End Sub

    Private Sub ubah_Click_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ubah.Click
        If TextBox1.Text = "" Then
            MsgBox("data belum lengkap")
            Exit Sub
        Else
            Call koneksi()
            Dim ubah As String = "update Buku set Judul='" & TextBox2.Text & "', KodeJenis= '" & ComboBox1.Text & "', Pengarang='" & TextBox3.Text & "', Penerbit='" & TextBox4.Text & "', JumlahBuku='" & TextBox5.Text & "', Harga='" & TextBox6.Text & "', Deskripsi='" & TextBox7.Text & "' where KodeBuku='" & TextBox1.Text & "'"
            cmd = New OleDbCommand(ubah, conn)
            cmd.ExecuteNonQuery()
            MsgBox("ubah data sukses..!", MsgBoxStyle.Information, "perhatian")
        End If
        Call Kosong()
        Call TampilJenis()
        Call TampilBuku()
    End Sub

    Private Sub TextBox9_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles TextBox9.Click
        cmd = New OleDbCommand("select * from Buku where KodeBuku like '%" & TextBox9.Text & "%'", conn)
        rd = cmd.ExecuteReader
        rd.Read()
        If rd.HasRows Then
            da = New OleDbDataAdapter("Select * From Buku where KodeBuku like '%" & TextBox9.Text & "%'", conn)
            ds = New DataSet
            da.Fill(ds, "Dapat")
            DataGridView1.DataSource = ds.Tables("Dapat")
            DataGridView1.ReadOnly = True
        Else
            MsgBox("Data Tidak ditemukan")
        End If
    End Sub
    
End Class
