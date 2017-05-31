<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_5032647d2c31f7992ddca5ac6219669afde5f522b034283d385ee86f67e04047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1926a7499f8ee67329086553febdd8d2d58257de102f3a0fe4f695013698975a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1926a7499f8ee67329086553febdd8d2d58257de102f3a0fe4f695013698975a->enter($__internal_1926a7499f8ee67329086553febdd8d2d58257de102f3a0fe4f695013698975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_251ad93ba255d6521ad8e279ddc381eefff0043c0c9d66858c647a81ef48786f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251ad93ba255d6521ad8e279ddc381eefff0043c0c9d66858c647a81ef48786f->enter($__internal_251ad93ba255d6521ad8e279ddc381eefff0043c0c9d66858c647a81ef48786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_1926a7499f8ee67329086553febdd8d2d58257de102f3a0fe4f695013698975a->leave($__internal_1926a7499f8ee67329086553febdd8d2d58257de102f3a0fe4f695013698975a_prof);

        
        $__internal_251ad93ba255d6521ad8e279ddc381eefff0043c0c9d66858c647a81ef48786f->leave($__internal_251ad93ba255d6521ad8e279ddc381eefff0043c0c9d66858c647a81ef48786f_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_bee23174b466f62a66acc09ea9fc64541ddf36b7223956e3a4e68828cc2d8fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee23174b466f62a66acc09ea9fc64541ddf36b7223956e3a4e68828cc2d8fb7->enter($__internal_bee23174b466f62a66acc09ea9fc64541ddf36b7223956e3a4e68828cc2d8fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_fda1ae9e7b0cee1fa00c0069a913751d7c6c9c9b302d4b7fafd0e934579c60d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda1ae9e7b0cee1fa00c0069a913751d7c6c9c9b302d4b7fafd0e934579c60d7->enter($__internal_fda1ae9e7b0cee1fa00c0069a913751d7c6c9c9b302d4b7fafd0e934579c60d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fda1ae9e7b0cee1fa00c0069a913751d7c6c9c9b302d4b7fafd0e934579c60d7->leave($__internal_fda1ae9e7b0cee1fa00c0069a913751d7c6c9c9b302d4b7fafd0e934579c60d7_prof);

        
        $__internal_bee23174b466f62a66acc09ea9fc64541ddf36b7223956e3a4e68828cc2d8fb7->leave($__internal_bee23174b466f62a66acc09ea9fc64541ddf36b7223956e3a4e68828cc2d8fb7_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_06003a404ddf352070e952195e0c965653663cfd392b7f90e89b8a1d4b25e6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06003a404ddf352070e952195e0c965653663cfd392b7f90e89b8a1d4b25e6f3->enter($__internal_06003a404ddf352070e952195e0c965653663cfd392b7f90e89b8a1d4b25e6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_58ada30d28351a4970c53baf1d47af8444c4b8c7b32e7c3a1aa68a3b52614a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ada30d28351a4970c53baf1d47af8444c4b8c7b32e7c3a1aa68a3b52614a91->enter($__internal_58ada30d28351a4970c53baf1d47af8444c4b8c7b32e7c3a1aa68a3b52614a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_58ada30d28351a4970c53baf1d47af8444c4b8c7b32e7c3a1aa68a3b52614a91->leave($__internal_58ada30d28351a4970c53baf1d47af8444c4b8c7b32e7c3a1aa68a3b52614a91_prof);

        
        $__internal_06003a404ddf352070e952195e0c965653663cfd392b7f90e89b8a1d4b25e6f3->leave($__internal_06003a404ddf352070e952195e0c965653663cfd392b7f90e89b8a1d4b25e6f3_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_4937312b08c0b80297a6dcabce7bb7f825a1c70dc14e3bb1a99df7268d747e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4937312b08c0b80297a6dcabce7bb7f825a1c70dc14e3bb1a99df7268d747e31->enter($__internal_4937312b08c0b80297a6dcabce7bb7f825a1c70dc14e3bb1a99df7268d747e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_f17e1ad4bd03e3f9ebf57ac590f0366d4beb474e2b63230d447a491b5e17af27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17e1ad4bd03e3f9ebf57ac590f0366d4beb474e2b63230d447a491b5e17af27->enter($__internal_f17e1ad4bd03e3f9ebf57ac590f0366d4beb474e2b63230d447a491b5e17af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f17e1ad4bd03e3f9ebf57ac590f0366d4beb474e2b63230d447a491b5e17af27->leave($__internal_f17e1ad4bd03e3f9ebf57ac590f0366d4beb474e2b63230d447a491b5e17af27_prof);

        
        $__internal_4937312b08c0b80297a6dcabce7bb7f825a1c70dc14e3bb1a99df7268d747e31->leave($__internal_4937312b08c0b80297a6dcabce7bb7f825a1c70dc14e3bb1a99df7268d747e31_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_85b356dcf6a9c8fa137dfe1477a65cee01c68b0faf6be748a1b9ad4624ef6ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b356dcf6a9c8fa137dfe1477a65cee01c68b0faf6be748a1b9ad4624ef6ed8->enter($__internal_85b356dcf6a9c8fa137dfe1477a65cee01c68b0faf6be748a1b9ad4624ef6ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_07bfec0a5e234efab22d7278a8e027d7bc861240b86d18b9dbd83abe4422a6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bfec0a5e234efab22d7278a8e027d7bc861240b86d18b9dbd83abe4422a6df->enter($__internal_07bfec0a5e234efab22d7278a8e027d7bc861240b86d18b9dbd83abe4422a6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07bfec0a5e234efab22d7278a8e027d7bc861240b86d18b9dbd83abe4422a6df->leave($__internal_07bfec0a5e234efab22d7278a8e027d7bc861240b86d18b9dbd83abe4422a6df_prof);

        
        $__internal_85b356dcf6a9c8fa137dfe1477a65cee01c68b0faf6be748a1b9ad4624ef6ed8->leave($__internal_85b356dcf6a9c8fa137dfe1477a65cee01c68b0faf6be748a1b9ad4624ef6ed8_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
