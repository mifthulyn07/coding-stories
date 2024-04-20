<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form4
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.Batal = New System.Windows.Forms.Button()
        Me.Hapus = New System.Windows.Forms.Button()
        Me.Ubah = New System.Windows.Forms.Button()
        Me.simpan = New System.Windows.Forms.Button()
        Me.TextBox3 = New System.Windows.Forms.TextBox()
        Me.nama = New System.Windows.Forms.TextBox()
        Me.kode = New System.Windows.Forms.TextBox()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label1 = New System.Windows.Forms.Label()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'DataGridView1
        '
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.Location = New System.Drawing.Point(49, 151)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.Size = New System.Drawing.Size(381, 219)
        Me.DataGridView1.TabIndex = 29
        '
        'Batal
        '
        Me.Batal.Location = New System.Drawing.Point(355, 96)
        Me.Batal.Name = "Batal"
        Me.Batal.Size = New System.Drawing.Size(75, 23)
        Me.Batal.TabIndex = 28
        Me.Batal.Text = "Batal"
        Me.Batal.UseVisualStyleBackColor = True
        '
        'Hapus
        '
        Me.Hapus.Location = New System.Drawing.Point(254, 96)
        Me.Hapus.Name = "Hapus"
        Me.Hapus.Size = New System.Drawing.Size(75, 23)
        Me.Hapus.TabIndex = 27
        Me.Hapus.Text = "Hapus"
        Me.Hapus.UseVisualStyleBackColor = True
        '
        'Ubah
        '
        Me.Ubah.Location = New System.Drawing.Point(153, 96)
        Me.Ubah.Name = "Ubah"
        Me.Ubah.Size = New System.Drawing.Size(75, 23)
        Me.Ubah.TabIndex = 26
        Me.Ubah.Text = "Ubah"
        Me.Ubah.UseVisualStyleBackColor = True
        '
        'simpan
        '
        Me.simpan.Location = New System.Drawing.Point(49, 96)
        Me.simpan.Name = "simpan"
        Me.simpan.Size = New System.Drawing.Size(75, 23)
        Me.simpan.TabIndex = 25
        Me.simpan.Text = "Simpan"
        Me.simpan.UseVisualStyleBackColor = True
        '
        'TextBox3
        '
        Me.TextBox3.Location = New System.Drawing.Point(49, 125)
        Me.TextBox3.Name = "TextBox3"
        Me.TextBox3.Size = New System.Drawing.Size(381, 20)
        Me.TextBox3.TabIndex = 24
        '
        'nama
        '
        Me.nama.Location = New System.Drawing.Point(153, 61)
        Me.nama.Name = "nama"
        Me.nama.Size = New System.Drawing.Size(176, 20)
        Me.nama.TabIndex = 23
        '
        'kode
        '
        Me.kode.Location = New System.Drawing.Point(153, 26)
        Me.kode.Name = "kode"
        Me.kode.Size = New System.Drawing.Size(176, 20)
        Me.kode.TabIndex = 22
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(52, 67)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(62, 13)
        Me.Label2.TabIndex = 21
        Me.Label2.Text = "Nama Jenis"
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(52, 29)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(59, 13)
        Me.Label1.TabIndex = 20
        Me.Label1.Text = "Kode Jenis"
        '
        'Form4
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(478, 396)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.Batal)
        Me.Controls.Add(Me.Hapus)
        Me.Controls.Add(Me.Ubah)
        Me.Controls.Add(Me.simpan)
        Me.Controls.Add(Me.TextBox3)
        Me.Controls.Add(Me.nama)
        Me.Controls.Add(Me.kode)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Name = "Form4"
        Me.Text = "Data Jenis Buku"
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents DataGridView1 As System.Windows.Forms.DataGridView
    Friend WithEvents Batal As System.Windows.Forms.Button
    Friend WithEvents Hapus As System.Windows.Forms.Button
    Friend WithEvents Ubah As System.Windows.Forms.Button
    Friend WithEvents simpan As System.Windows.Forms.Button
    Friend WithEvents TextBox3 As System.Windows.Forms.TextBox
    Friend WithEvents nama As System.Windows.Forms.TextBox
    Friend WithEvents kode As System.Windows.Forms.TextBox
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents Label1 As System.Windows.Forms.Label
End Class
