<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3f177243aad3212c75c98d83e3ee0f8abe5e71c8b8ac03d2e8164e906dbe4179 extends Twig_Template
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
        $__internal_51c7180915ab29feb1e48226e586790dfbdc61efad0a736d249de32467aaedca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c7180915ab29feb1e48226e586790dfbdc61efad0a736d249de32467aaedca->enter($__internal_51c7180915ab29feb1e48226e586790dfbdc61efad0a736d249de32467aaedca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_b799ae2d7202cf34a395a54955338dd1bdc99b323c11f84770d2de9af74d8426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b799ae2d7202cf34a395a54955338dd1bdc99b323c11f84770d2de9af74d8426->enter($__internal_b799ae2d7202cf34a395a54955338dd1bdc99b323c11f84770d2de9af74d8426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_51c7180915ab29feb1e48226e586790dfbdc61efad0a736d249de32467aaedca->leave($__internal_51c7180915ab29feb1e48226e586790dfbdc61efad0a736d249de32467aaedca_prof);

        
        $__internal_b799ae2d7202cf34a395a54955338dd1bdc99b323c11f84770d2de9af74d8426->leave($__internal_b799ae2d7202cf34a395a54955338dd1bdc99b323c11f84770d2de9af74d8426_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0fa20d3b8670a6dafbe995bc27c459b59a7827a4827f3b017d93a596cceef402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa20d3b8670a6dafbe995bc27c459b59a7827a4827f3b017d93a596cceef402->enter($__internal_0fa20d3b8670a6dafbe995bc27c459b59a7827a4827f3b017d93a596cceef402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_eadc491c2f1e5e72660172abe245ba2d6b5988e118bf2303a32f578ccebffc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadc491c2f1e5e72660172abe245ba2d6b5988e118bf2303a32f578ccebffc15->enter($__internal_eadc491c2f1e5e72660172abe245ba2d6b5988e118bf2303a32f578ccebffc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eadc491c2f1e5e72660172abe245ba2d6b5988e118bf2303a32f578ccebffc15->leave($__internal_eadc491c2f1e5e72660172abe245ba2d6b5988e118bf2303a32f578ccebffc15_prof);

        
        $__internal_0fa20d3b8670a6dafbe995bc27c459b59a7827a4827f3b017d93a596cceef402->leave($__internal_0fa20d3b8670a6dafbe995bc27c459b59a7827a4827f3b017d93a596cceef402_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_4172658b5325067e2b8f371e927d67f46470c0bcaab9afec48410c4538ebae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4172658b5325067e2b8f371e927d67f46470c0bcaab9afec48410c4538ebae38->enter($__internal_4172658b5325067e2b8f371e927d67f46470c0bcaab9afec48410c4538ebae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_a805024de65b50e1a3c4facdc23201c36d7cdcf2b644ccec3d94e2285d8ce56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a805024de65b50e1a3c4facdc23201c36d7cdcf2b644ccec3d94e2285d8ce56a->enter($__internal_a805024de65b50e1a3c4facdc23201c36d7cdcf2b644ccec3d94e2285d8ce56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_a805024de65b50e1a3c4facdc23201c36d7cdcf2b644ccec3d94e2285d8ce56a->leave($__internal_a805024de65b50e1a3c4facdc23201c36d7cdcf2b644ccec3d94e2285d8ce56a_prof);

        
        $__internal_4172658b5325067e2b8f371e927d67f46470c0bcaab9afec48410c4538ebae38->leave($__internal_4172658b5325067e2b8f371e927d67f46470c0bcaab9afec48410c4538ebae38_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_79f7e8148d8305b8fcb2a3741ecdca087a0d60b8e3ee0db15efa90197ab511ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f7e8148d8305b8fcb2a3741ecdca087a0d60b8e3ee0db15efa90197ab511ef->enter($__internal_79f7e8148d8305b8fcb2a3741ecdca087a0d60b8e3ee0db15efa90197ab511ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_42ef127e268687097b98378fa6f0236cc7515a5d74a0e661e5e3f85a1b611836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ef127e268687097b98378fa6f0236cc7515a5d74a0e661e5e3f85a1b611836->enter($__internal_42ef127e268687097b98378fa6f0236cc7515a5d74a0e661e5e3f85a1b611836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_42ef127e268687097b98378fa6f0236cc7515a5d74a0e661e5e3f85a1b611836->leave($__internal_42ef127e268687097b98378fa6f0236cc7515a5d74a0e661e5e3f85a1b611836_prof);

        
        $__internal_79f7e8148d8305b8fcb2a3741ecdca087a0d60b8e3ee0db15efa90197ab511ef->leave($__internal_79f7e8148d8305b8fcb2a3741ecdca087a0d60b8e3ee0db15efa90197ab511ef_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_4c60535ca832f08ca56da7c12f58dc37c70e50bc36ee82d1d38ae84b190292a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c60535ca832f08ca56da7c12f58dc37c70e50bc36ee82d1d38ae84b190292a2->enter($__internal_4c60535ca832f08ca56da7c12f58dc37c70e50bc36ee82d1d38ae84b190292a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_f7997e14c736826c945cd775c6a05d56a2814384b07ec3d5ef44713e6b2e4351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7997e14c736826c945cd775c6a05d56a2814384b07ec3d5ef44713e6b2e4351->enter($__internal_f7997e14c736826c945cd775c6a05d56a2814384b07ec3d5ef44713e6b2e4351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_f7997e14c736826c945cd775c6a05d56a2814384b07ec3d5ef44713e6b2e4351->leave($__internal_f7997e14c736826c945cd775c6a05d56a2814384b07ec3d5ef44713e6b2e4351_prof);

        
        $__internal_4c60535ca832f08ca56da7c12f58dc37c70e50bc36ee82d1d38ae84b190292a2->leave($__internal_4c60535ca832f08ca56da7c12f58dc37c70e50bc36ee82d1d38ae84b190292a2_prof);

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
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
