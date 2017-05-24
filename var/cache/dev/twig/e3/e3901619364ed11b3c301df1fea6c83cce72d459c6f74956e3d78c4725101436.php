<?php

/* @ESFEspaceAbonne/Default/mesParametres.html.twig */
class __TwigTemplate_04eb3cb99c749744676133ff8f300de66d99b43afa78950face67f6624c186c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mesParametres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23e6715f2ad7d6f35b4de2b3435097176302230f5dce19c55b96e243b6627185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e6715f2ad7d6f35b4de2b3435097176302230f5dce19c55b96e243b6627185->enter($__internal_23e6715f2ad7d6f35b4de2b3435097176302230f5dce19c55b96e243b6627185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametres.html.twig"));

        $__internal_d59b86fa97e4fb1d73d16a983485e53618615d9cb68ce31b237cb8075ad09a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59b86fa97e4fb1d73d16a983485e53618615d9cb68ce31b237cb8075ad09a01->enter($__internal_d59b86fa97e4fb1d73d16a983485e53618615d9cb68ce31b237cb8075ad09a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e6715f2ad7d6f35b4de2b3435097176302230f5dce19c55b96e243b6627185->leave($__internal_23e6715f2ad7d6f35b4de2b3435097176302230f5dce19c55b96e243b6627185_prof);

        
        $__internal_d59b86fa97e4fb1d73d16a983485e53618615d9cb68ce31b237cb8075ad09a01->leave($__internal_d59b86fa97e4fb1d73d16a983485e53618615d9cb68ce31b237cb8075ad09a01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c045b1b4be403bbc8a637be43f672520e40575d552bc60152708c363de21c01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c045b1b4be403bbc8a637be43f672520e40575d552bc60152708c363de21c01f->enter($__internal_c045b1b4be403bbc8a637be43f672520e40575d552bc60152708c363de21c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23d7003fc77b1d47fda88ee5d1a8e298618ebbb147db68c335ccf105525e86bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d7003fc77b1d47fda88ee5d1a8e298618ebbb147db68c335ccf105525e86bc->enter($__internal_23d7003fc77b1d47fda88ee5d1a8e298618ebbb147db68c335ccf105525e86bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_23d7003fc77b1d47fda88ee5d1a8e298618ebbb147db68c335ccf105525e86bc->leave($__internal_23d7003fc77b1d47fda88ee5d1a8e298618ebbb147db68c335ccf105525e86bc_prof);

        
        $__internal_c045b1b4be403bbc8a637be43f672520e40575d552bc60152708c363de21c01f->leave($__internal_c045b1b4be403bbc8a637be43f672520e40575d552bc60152708c363de21c01f_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b50659bd21f40d39d1839db4c9a808ff624ea462d1695363b251444d3c278272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50659bd21f40d39d1839db4c9a808ff624ea462d1695363b251444d3c278272->enter($__internal_b50659bd21f40d39d1839db4c9a808ff624ea462d1695363b251444d3c278272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5c4e88db9bc933f6c0c59b2eaa22a8505e10d9116a3ee0c95a33430de94508ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e88db9bc933f6c0c59b2eaa22a8505e10d9116a3ee0c95a33430de94508ac->enter($__internal_5c4e88db9bc933f6c0c59b2eaa22a8505e10d9116a3ee0c95a33430de94508ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_5c4e88db9bc933f6c0c59b2eaa22a8505e10d9116a3ee0c95a33430de94508ac->leave($__internal_5c4e88db9bc933f6c0c59b2eaa22a8505e10d9116a3ee0c95a33430de94508ac_prof);

        
        $__internal_b50659bd21f40d39d1839db4c9a808ff624ea462d1695363b251444d3c278272->leave($__internal_b50659bd21f40d39d1839db4c9a808ff624ea462d1695363b251444d3c278272_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block Content %} 
  <!-- Mes Parametres -->
  {{ form_start(form) }}
  
  {% if not form.vars.valid %}
    <div class=\"alert alert-error\">
      {{ form_errors(form) }}
    </div>
  {% endif %}

  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "@ESFEspaceAbonne/Default/mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mesParametres.html.twig");
    }
}
